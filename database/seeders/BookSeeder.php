<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert(
                [
                    'title' => fake()->text(25),
                    'thumbnail' => fake()->imageUrl(),
                    'author' => fake()->name(),
                    'publisher' => fake()->company(),
                    'publication' => fake()->dateTimeBetween('-10 years', 'now'),
                    'price' => fake()->randomFloat(2, 5, 100), // Giá bán từ 5 đến 100
                    'quantity' => rand(1, 50), // Số lượng từ 1 đến 50
                    'category_id' => rand(1, 4) // Mã loại (giả sử có 4 loại sách)
                ]
            );
        }
    }
}
