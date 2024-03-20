<?php
namespace Database\Factories;

use App\Models\Alum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AlumFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Alum::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'name' => $this->faker->name,
'email' => $this->faker->unique()->safeEmail,
'password' => Hash::make('password'), // Example password (hashed)
'graduation_year' => $this->faker->dateTimeBetween('-4 years', 'now')->format('Y'), // Random graduation year within the last 4 years
'bio' => $this->faker->paragraph,
'profile_picture' => null, // You may modify this according to your needs
'skill_name' => $this->faker->word, // Example skill name
'proficiency_level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']), // Random proficiency level
'experience_years' => $this->faker->numberBetween(0, 10), // Random number of experience years
'certifications' => $this->faker->sentence, // Example certification
'academic_achievements' => $this->faker->sentence, // Example academic achievement
'work_experience' => $this->faker->sentence, // Example work experience
'projects' => $this->faker->sentence, // Example project
'additional_info' => $this->faker->paragraph, // Additional information
];
}
}