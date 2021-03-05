<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->uuid.$this->faker->uuid.Str::random(16),
            'description' => $this->faker->text(30),
            'brand' => 'overridden',
            'user_id' => 'overridden'
        ];
    }
}
