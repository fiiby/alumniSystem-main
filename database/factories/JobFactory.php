<?php
namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Job::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'title' => $this->faker->jobTitle,
'description' => $this->faker->paragraph,
'requirements' => $this->faker->sentence,
'application_deadline' => $this->faker->dateTimeBetween('now', '+6 months')->format('Y-m-d H:i:s'), // Random deadline within the next 6 months
];
}
}