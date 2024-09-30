<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Task_Assiment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Task_AssimentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Task_Assiment::class;
    public function definition(): array
    {
        return [
            'user_id'=> User::inRandomOrder()->first()->id,
       'task_id'=> Task::inRandomOrder()->first()->id,
        ];
    }
}
