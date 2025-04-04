<?php

namespace App\Models;

use App\Enum\PriorityEnum;
use App\Enum\StatusEnum;
use App\Http\Resources\TaskResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status', 'priority', 'order'];


    protected $casts = [
        'status' => StatusEnum::class,
        'priority' => PriorityEnum::class
    ];

    public function scopeStatus()
    {
        return $this->status->number();
    }

    public function reorderInStatus(int $index, string $newStatus)
    {
        if ($index === $this->order && $newStatus === $this->status->value) {
            return;
        }

        $oldStatus = $this->status->value;

        if ($this->status->value !== $newStatus) {
            $this->update(['status' => $newStatus]);
            $this->taskRemovedFromStatus($oldStatus, $this->order);
            $this->updateIndexBetweenColumn($index);
            return;
        }

        $this->updateIndexInColumn($index);
    }


    public static function taskRemovedFromStatus(string $status, int $order): void
    {
        self::query()
            ->where('status', $status)
            ->where('order', '>', $order)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->decrement('order');
            });
    }

    public function updateIndexBetweenColumn(int $index)
    {
        // MAx index max()
        // max 0 = update index of this task and return
        $maxIndex=Task::query()->where('status',$this->status->value)->count();
        if($maxIndex=== 0) {
            $this->update(['order',0]);
            return;
        }
        //
        // Re-order within same index
        $this->update(['order' => $index]);


        Task::query()
            ->where('status', $this->status->value)
            ->where('order', '>=', $this->order)
            ->whereNot('id',$this->id)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->increment('order');
            });
    }
    public static function getGroupedTasks()
    {
        $carry = [];

        foreach (StatusEnum::cases() as $statusEnum) {
            $carry[$statusEnum->value] = [
                'status' => $statusEnum->value,
                'tasks' => []
            ];
        }

        Task::query()
            ->get()
            ->groupBy('status.value')
            ->map(function ($tasks, $status) use (&$carry) {
                $carry[$status] = [
                    'status' => $status,
                    'tasks' => TaskResource::collection($tasks->sortBy('order')),
                ];
            });

        return array_values($carry);
    }

    public function updateIndexInColumn(int $index)
    {
        // MAx index max()
        // max 0 = update index of this task and return

        //
        // Re-order within same index
        $old_order=$this->order;
        $this->update(['order' => $index]);


        $old_order>$this->order?
            Task::query()
            ->where('status', $this->status->value)
            ->whereBetween('order',[$this->order,$old_order])
            ->whereNot('id',$this->id)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->increment('order');
            })
            :
            Task::query()
            ->where('status',$this->status->value)
            ->whereBetween('order', [$old_order,$this->order])
            ->whereNot('id',$this->id)
            ->get()
            ->each(function (Task $taskInStatus) {
                $taskInStatus->decrement('order');
            });

    }



}
