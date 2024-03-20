<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Connection;

class ConnectionSeeder extends Seeder
{

public function run()
{
// Create 10 fake connections
Connection::factory()->count(10)->create();
}
}