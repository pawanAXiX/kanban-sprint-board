<?php

namespace App\Http\Controllers;

use App\Enum\StatusEnum;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\ReorderTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json($this->getGroupedTasks());
    }

    public function getGroupedTasks()
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

    public function store(CreateTaskRequest $request): JsonResponse
    {
        $maxOrder=Task::query()->where('status',$request->input('status'))->max('order');
        $task = Task::create($request->validated());
        $task->order=$maxOrder+1;
        $task->save();
        return response()->json(TaskResource::make($task));
    }

    public function reorder(Task $task, ReorderTaskRequest $request)
    {
        $task->reorderInStatus($request->input('index'), $request->input('newStatus'));

        return response()->json($this->getGroupedTasks());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, string $id)
    {
        // update  name and description of task
        $name=$request->input('name');
        $description=$request->input('description');
        $task=Task::query()->findOrFail($id);
        $task->update(['name'=>$name,'description'=>$description]);
        return response()->json(TaskResource::make($task));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        Task::taskRemovedFromStatus($task->status->vlaue,$task->order);
        $task->delete();
        return response()->json(['message' => 'success'], 204);
    }
}
