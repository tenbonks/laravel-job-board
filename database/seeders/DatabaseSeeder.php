<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 300 users
        User::factory(300)->create();

        // Get all the users and shuffle the order
        $users = User::all()->shuffle();

        // Create 20 employers linked to an unique user
        for ($i = 0; $i < 20; $i++) {
            Employer::factory()->create([
                'user_id' => $users->pop()->id, // get, and remove a random user id from the shuffled users
            ]);
        }

        // Get all the employers, as we need to link a job to them
        $employers = Employer::all();

        // Create 100 Jobs linked to a random employer id, the employer does not need to be unique
        for ($i = 0; $i < 100; $i++) {
            Job::factory()->create([
                'employer_id' => $employers->random()->id,
            ]);
        }

    }
}
