<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory()->create([
            'nama' => 'IT'
        ]);
        \App\Models\Category::factory()->create([
            'nama' => 'Anime'
        ]);
        \App\Models\Category::factory()->create([
            'nama' => 'Game'
        ]);
    }
}
