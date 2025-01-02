<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Furniture', 'description' => 'All kinds of furniture for your home.'],
            ['name' => 'Decor', 'description' => 'Home decor and decorations for every style.'],
            ['name' => 'Lighting', 'description' => 'Lamps and lighting equipment for all rooms.'],
            ['name' => 'Kitchenware', 'description' => 'Essential items for your kitchen needs.'],
            ['name' => 'Outdoor', 'description' => 'Furniture and accessories for your outdoor space.'],
            ['name' => 'Bathroom', 'description' => 'Elegant and practical bathroom items.'],
            ['name' => 'Storage', 'description' => 'Storage solutions to organize your home.'],
            ['name' => 'Bedding', 'description' => 'Comfortable and stylish bedding sets.'],
            ['name' => 'Office', 'description' => 'Furniture and decor for your workspace.'],
            ['name' => 'Kids', 'description' => 'Furniture and decor specially designed for kids.'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
