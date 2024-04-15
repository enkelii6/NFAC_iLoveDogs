<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Score;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Score::factory(100)->create();
    }
}
