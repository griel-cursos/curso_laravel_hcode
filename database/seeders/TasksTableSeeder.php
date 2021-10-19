<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Task::create([
            'name'=>'Estudar PHP',
            'complete'=>true
        ]);
        Task::create([
            'name'=>'Estudar JavaScript',
            'complete'=>true
        ]);
        Task::create([
            'name'=>'Estudar Laravel',
            'complete'=>false
        ]);

    }
}
