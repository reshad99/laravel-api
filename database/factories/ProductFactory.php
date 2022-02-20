<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->sentence(3);
        $random = mt_rand(10,100) / 10;
        return [
            'name' => $product_name, 
            'slug' => Str::slug($product_name),
            'description' => $this->faker->paragraph(),
            'price' => $random,
        ];
    }
}
