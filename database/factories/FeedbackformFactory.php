<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

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
            'Subject' => fake()->text(),
            'Feedback' => fake()->text(),
            'created_at' => Carbon::createFromTimestamp(rand(now()->subDays(60)->timestamp, now()->timestamp)),
            'File' => fake()->file('C:\Users\Naji2\phpWork\FeedBack\storage\app\public\docs')
        ];
    }
}
