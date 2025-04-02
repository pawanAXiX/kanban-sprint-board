<?php

namespace Database\Factories;

use App\Enum\PriorityEnum;
use App\Enum\StatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status=Arr::random(StatusEnum::cases())->value;
        $count=Task::all()->where('status',$status)->count();
        return [
            'name'=>$this->faker->name(),
            'description'=>$this->faker->text(),
            'priority'=>Arr::random(PriorityEnum::cases())->value,
            'status'=>$status,
            'order'=>$count,
        ];
    }
}
