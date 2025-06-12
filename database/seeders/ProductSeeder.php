<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Hammer',
                'description' => 'Forged steel hammer',
                'price' => 120.50,
                'stock' => 50,
                'category' => 'Tools',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Screwdriver',
                'description' => 'Flathead screwdriver',
                'price' => 35.00,
                'stock' => 100,
                'category' => 'Tools',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'White paint',
                'description' => 'Latex paint for interiors',
                'price' => 250.00,
                'stock' => 30,
                'category' => 'Paints',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
} 