<?php

namespace App\Http\Services;

use App\Enum\StatusEnum;
use App\Http\Resources\TaskResource;
use App\Models\Task;

class TaskService
{
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
}
