<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Job::factory(100)->create();
        User::factory(300)->create();

        $users = User::all()->shuffle();

        for($i = 0; $i < 20; $i++){
            Employer::factory()->create([
                'user_id' => $users->pop()->id,
            ]);
        }

        $employers = Employer::all()->shuffle();

        for($i = 0; $i < 100; $i++){
            Job::factory()->create([
                'employer_id' => $employers->random()->id,
            ]);
        }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
