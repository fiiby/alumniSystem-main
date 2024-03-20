<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 users only, no more even if seeded again
        //User::factory()->times(10)->create();
    }
}
