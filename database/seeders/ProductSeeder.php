<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert categories
        DB::table('product_categories')->insert([
            ['name' => 'Elektronik'],
            ['name' => 'Buku'],  
            ['name' => 'Makanan'],  
        ]);

        // Insert products
        DB::table('products')->insert([
            [
                'name' => 'Hp Iphone',
                'description' => 'Hp Iphone Terbaru 2025',
                'price' => 5500000,
                'stock' => 10,
                'image' => 'test image iphone',
                'product_categories_id' => 1,
            ],
            [
                'name' => 'Laptop ASUS',
                'description' => 'Laptop Gaming Terbaru',
                'price' => 12000000,
                'stock' => 5,
                'image' => 'test image laptop',
                'product_categories_id' => 1,
            ],
            [
                'name' => 'Novel Best Seller',
                'description' => 'Buku novel terbaik',
                'price' => 85000,
                'stock' => 20,
                'image' => 'test image buku',
                'product_categories_id' => 2,
            ],
            [
                'name' => 'Seblak Gacor',
                'description' => 'Seblak Gacor Super Pedas',
                'price' => 15000,
                'stock' => 25,
                'image' => 'test image seblak',
                'product_categories_id' => 3,
            ]
        ]);
    }
}
