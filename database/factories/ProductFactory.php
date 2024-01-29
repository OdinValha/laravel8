<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $amount = $this->faker->numberBetween(1, 3);
        $price = $this->faker->numberBetween(100, 100);
        $total = $amount * $price;

        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'photo' => $this->faker->imageUrl(640, 480, 'furnitures', true),
            'stock' => $this->faker->numberBetween(0, 100),

        ];
    }
}
