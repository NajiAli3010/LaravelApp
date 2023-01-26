<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class feedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject' => fake()->text(),
            'feedback' => fake()->text(),
              'file' => fake()->file('\storage\app\docs\t6qSkOQ7dLDsnPTBsvKfCAtGGGLMPtdll9tp2x1f.gif')
        ];
    }
}
