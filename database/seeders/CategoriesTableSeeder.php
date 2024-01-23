<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['nama' => 'Elektronik'],
            ['nama' => 'Makanan'],
            ['nama' => 'Kesehatan'],
        ];

        DB::table('categoris')->insert($categories);
    }
}
