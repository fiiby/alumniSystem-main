<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alum;

class AlumSeeder extends Seeder
{

public function run()
{
// Create 10 fake alumni records
Alum::factory()->count(10)->create();
}
}
