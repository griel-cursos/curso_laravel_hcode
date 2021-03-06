<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Database\Seeders\TasksTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // App\Models\TasksTableSeeder::factory(10)->create();

       $this->call(TasksTableSeeder::class);
    }
}
