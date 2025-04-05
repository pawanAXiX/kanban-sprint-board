<?php

namespace App\Traits;

use App\Enum\StatusEnum;
use App\Http\Resources\TaskResource;
use App\Models\Task;

trait IsDraggable
{
    //trying implement logic into trait for reusability
    //would be  much easier if status/column had a seperate db table

    static string $sortingColumn;
    static string $parentColumn;
    public  function reorderInStatus(int $index, string $newStatus)
    {
        $sorting_column=static::$sortingColumn;
        $parent_column=static::$parentColumn;
        if ($index === $this->$sorting_column && $newStatus === $this->$parent_column?->value??$this->$parent_column) {
            return;
        }

        $oldStatus = $this->$parent_column?->value??$this->$parent_column;

        if ($this->$parent_column?->value??$this->$parent_column !== $newStatus) {
            $this->update([$this->sortingColumn => $newStatus]);
            $this->taskRemovedFromStatus($oldStatus, $this->$sorting_column);
            $this->updateIndexBetweenColumn($index);
            return;
        }

        $this->updateIndexInColumn($index);
    }

    public static function taskRemovedFromStatus(string $status, int $order): void
    {

        self::query()
            ->where(static::$parentColumn, $status)
            ->where(static::$sortingColumn, '>', $order)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->decrement($this->sortingColumn);
            });
    }

    public function updateIndexBetweenColumn(int $index)
    {
        $sorting_column=static::$sortingColumn;
        $parent_column=static::$parentColumn;
        // MAx index max()
        // max 0 = update index of this task and return
        $maxIndex=Task::query()->where($this->parentColumn,$this->$parent_column?->value??$this->$parent_column)->count();
        if($maxIndex=== 0) {
            $this->update([$this->sortingColumn,0]);
            return;
        }
        //
        // Re-order within same index
        $this->update([$this->sortingColumn => $index]);


        Task::query()
            ->where(static::$parentColumn, $this->$parent_column?->value??$this->$parent_column)
            ->where(static::$parentColumn, '>=', $this->$sorting_column)
            ->whereNot('id',$this->id)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->increment($this->sortingColumn);
            });
    }
    public static function getGroupedTasks()
    {
        $carry = [];
        foreach (StatusEnum::cases() as $statusEnum) {
            $carry[$statusEnum->value] = [
                static::$parentColumn => $statusEnum->value,
                'tasks' => []
            ];
        }


        Task::query()
            ->get()
            ->groupBy('{status}.value')
            ->map(function ($tasks, $status) use (&$carry) {
                $carry[$status] = [
                    static::$parentColumn => $status,
                    'tasks' => TaskResource::collection($tasks->sortBy($this->sortingColumn)),
                ];
            });

        return array_values($carry);
    }

    public function updateIndexInColumn(int $index)
    {
        $sorting_column=$this->sortingColumn;
        $parent_column=$this->parentColumn;
        // MAx index max()
        // max 0 = update index of this task and return

        //
        // Re-order within same index
        $old_order=$this->$sorting_column;
        $this->update([$this->sortingColumn => $index]);


        $old_order>$this->$sorting_column?
            Task::query()
                ->where($this->parentColumn, $this->$parent_column?->value??$this->$parent_column)
                ->whereBetween($this->sortingColumn,[$this->$sorting_column,$old_order])
                ->whereNot('id',$this->id)
                ->get()
                ->each(function (Task $taskInStatus) {
                    $taskInStatus->increment($this->sortingColumn);
                })
            :
            Task::query()
                ->where($this->parentColumn,$this->$parent_column?->value??$this->$parent_column)
                ->whereBetween($this->sortingColumn, [$old_order,$this->$sorting_column])
                ->whereNot('id',$this->id)
                ->get()
                ->each(function (Task $taskInStatus) {
                    $taskInStatus->decrement('order');
                });

    }

}
