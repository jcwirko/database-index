<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i <= 25; $i++){
            Product::factory(10000)->create(['user_id' => 1, 'brand' => 'Adidas']);
            Product::factory(7000)->create(['user_id' => 2, 'brand' => 'Nike']);
            Product::factory(1300)->create(['user_id' => 3, 'brand' => 'Puma']);
        }
    }
}
