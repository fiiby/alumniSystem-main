<?php
namespace Database\Factories;

use App\Models\Connection;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConnectionFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Connection::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'sender_id' => rand(1, 10), // Adjust the range as needed based on the number of alumni
'receiver_id' => rand(1, 10), // Adjust the range as needed based on the number of alumni
'status' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
];
}
}