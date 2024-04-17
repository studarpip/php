<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create();

        Conference::factory()->create([
            'name' => 'Name',
            'description' => 'Description',
            'conference_date' => now(),
            'address' => fake()->address()
        ]);
    }
}
