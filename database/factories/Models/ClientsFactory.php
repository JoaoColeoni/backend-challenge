<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition()
     {
         return [
           'name' => $this->faker->name(),
           'email' => $this->faker->unique()->safeEmail(),
           'phone' => $this->faker->numerify('(##)####-####'),
           'birthdate' => $this->faker->date(),
           'adress' => $this->faker->sentence(2),
           'complement' => $this->faker->sentence(5),
           'district' => $this->faker->sentence(1),
           'zipcode' => $this->faker->numerify('########')
         ];
     }
}
