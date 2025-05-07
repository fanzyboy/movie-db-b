<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Action',
                'description' => 'Adegan kekerasan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Comedy',
                'description' => 'Film yang bertujuan untuk menghibur dan menyenangkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Drama',
                'description' => 'Film yang berfokus pada pengembangan karakter dan konflik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Sci-Fi',
                'description' => 'Film dengan latar belakang ilmiah dan teknologi futuristik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Romance',
                'description' => 'Film yang berfokus pada hubungan antar manusia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
