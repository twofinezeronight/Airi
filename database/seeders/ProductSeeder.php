<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $images = [
            'prod-19-1-500x475.jpg',
            'prod-18-1-500x475.jpg',
            'prod-17-1-500x475.jpg',
            'prod-16-1-500x475.jpg',
            'prod-15-1-500x475.jpg',
            'prod-13-1-500x475.jpg',
            'prod-12-1-500x475.jpg',
        ];

        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'name' => $faker->word,
                'img' => $faker->randomElement($images),  // Lấy một tên ảnh ngẫu nhiên từ mảng
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 1000),
                'quantity' => $faker->numberBetween (1, 100),
                'sold' => $faker->numberBetween (1, 100),
                'category_id' => $faker->numberBetween (1, 6), // Chọn ngẫu nhiên một danh mục từ 1 đến 6
            ]);
        }
    }
}
