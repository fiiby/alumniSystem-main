<?php
namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{

public function run()
{
// Create 5 fake events
Event::factory()->count(5)->create();
}
}