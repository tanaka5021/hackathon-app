<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inquiry>
 */
class InquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'question_content' => $this->faker->realText(30),
            'customer_name' => $this->faker->realText(30),
            'rep_name' => $this->faker->realText(30),
            'rep_division' => $this->faker->realText(30),
            /*
            'question_data' => now(),
            'respond_data' => now(),
            */
            'respond_content' => $this->faker->realText(30)
        ];
    }
}
