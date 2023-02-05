<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ProductCategory::pluck('id');
        
        foreach ($categories as $categoryId) {
            Product::factory( rand(120, 280) )->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
