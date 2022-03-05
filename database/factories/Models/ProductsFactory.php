<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Models\Products>
 */
class ProductsFactory extends Factory
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
           'price' => $this->faker->randomFloat(2,3,6),
           'photo' => storage_path('img') . '\\Pastel' . $this->faker->numberBetween(1, 6) . '.jpg'
         ];
     }
}
