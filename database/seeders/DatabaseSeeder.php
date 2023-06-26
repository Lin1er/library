<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Book::factory(1000)->create();


        \App\Models\Category::factory()->create([
            'name' => 'Novel',
            'slug' => 'novel',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Islami',
            'slug' => 'islami',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Pelajaran',
            'slug' => 'pelajaran',
        ]);
    }
}
