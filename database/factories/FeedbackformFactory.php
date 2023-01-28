<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedbackform>
 */
class FeedbackformFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=>rand(1,50),
            'Subject'=>$this->faker->title(),
            'Feedback'=>$this->faker->paragraph(),
            'File'=>fake()->name
        ];
    }
}
