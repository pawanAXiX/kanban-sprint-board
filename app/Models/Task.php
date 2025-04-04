<?php

namespace App\Models;

use App\Enum\PriorityEnum;
use App\Enum\StatusEnum;
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

        if ($this->status->value !== $newStatus) {
            $this->removeFromStatus($newStatus);
        }

        $this->updateIndex($index);
    }



    public function removeFromStatus(string $newStatus): void
    {
        $oldStatus = $this->status;

        $this->update(['status' => $newStatus]);

        Task::query()
            ->where('status', $oldStatus->value)
            ->where('order', '>', $this->order)
            ->whereNot('id', $this->id)
            ->get()
            ->map(function (Task $taskInStatus) {
                return $taskInStatus->decrement('order');
            });
    }

    public function updateIndex(int $index)
    {
        // MAx index max()
        // max 0 = update index of this task and return
        $maxIndex=Task::query()->count();

        if($maxIndex=== 0) {
            $this->update(['order',0]);
        }
        //

        // Re-order within same index
        $this->update(['order' => $index]);


        Task::query()
            ->where('status', $this->status->value)
            ->where('order', '>=', $this->order)
            ->whereNot('id',$this->id)
            ->get()
            ->map(function (Task $taskInStatus) {
                return $taskInStatus->increment('order');
            });



    }
}
