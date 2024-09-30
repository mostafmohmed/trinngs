<?php

namespace Database\Seeders;

use App\Models\Task_Assiment as ModelsTask_Assiment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task_Assiment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsTask_Assiment::factory()->count(30)->create();
    }
}
