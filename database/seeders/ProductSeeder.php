<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Modern Sofa',
                'price' => 1500,
                'description' => 'A comfortable and stylish modern sofa.',
                'slug' => Str::slug('Modern Sofa'),
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://www.denelli.co.uk/media/catalog/product/cache/1/image/1029x825/9df78eab33525d08d6e5fb8d27136e95/d/o/domino-corner-sofa-1.jpeg',
            ],
            [
                'name' => 'Wooden Dining Table',
                'price' => 200000,
                'description' => 'A large wooden dining table perfect for families.',
                'slug' => Str::slug('Wooden Dining Table'),
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://woodlandcreekfurniture.com/media/catalog/product/cache/1044726d93dd0fc5b52ac7ed430bb624/w/c/wcf-9527-edit.jpg',
            ],
            [
                'name' => 'LED Ceiling Light',
                'price' => 50000,
                'description' => 'An energy-efficient LED ceiling light.',
                'slug' => Str::slug('LED Ceiling Light'),
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://cdn02.plentymarkets.com/9krpwzxa6mmo/item/images/81072267/full/104081-2N-4.jpg',
            ],
            [
                'name' => 'Cozy Armchair',
                'price' => 120000,
                'description' => 'A cozy armchair for relaxing after a long day.',
                'slug' => Str::slug('Cozy Armchair'),
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR8UdCy9LHtv7wbla208bAHhrYVxaddCOcHA&s',
            ],
            [
                'name' => 'Wall Shelf Unit',
                'price' => 75000,
                'description' => 'A stylish wall shelf unit to organize your items.',
                'slug' => Str::slug('Wall Shelf Unit'),
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://m.media-amazon.com/images/I/619xgF2vPoL.jpg',
            ],
            [
                'name' => 'Luxury Bed Frame',
                'price' => 250000,
                'description' => 'A luxurious bed frame for your bedroom.',
                'slug' => Str::slug('Luxury Bed Frame'),
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://www.bedroomking.co.uk/cdn/shop/products/Luxury-Tall-Wingback.jpg?v=1667899872',
            ],
            [
                'name' => 'Minimalist Desk',
                'price' => 100000,
                'description' => 'A minimalist desk for your home office.',
                'slug' => Str::slug('Minimalist Desk'),
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://m.media-amazon.com/images/I/71FJtvRqmoL.jpg',
            ],
            [
                'name' => 'Floor Lamp',
                'price' => 6000,
                'description' => 'A modern floor lamp to brighten up your space.',
                'slug' => Str::slug('Floor Lamp'),
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://api.deepai.org/job-view-file/f6aba992-5db9-4b3e-8e23-8889165428b3/outputs/output.jpg?art-image=true',
            ],
            [
                'name' => 'Ottoman Stool',
                'price' => 45000,
                'description' => 'A versatile ottoman stool for extra seating.',
                'slug' => Str::slug('Ottoman Stool'),
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt-NwEb7_my14BexmrozjUJRGCKztWg9yRqg&s',
            ],
            [
                'name' => 'Bookshelf Organizer',
                'price' => 90000,
                'description' => 'A bookshelf organizer for your library or study.',
                'slug' => Str::slug('Bookshelf Organizer'),
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://m.media-amazon.com/images/I/71B5ioJXXrL.jpg',
            ],
            [
                'name' => 'Vintage Rug',
                'price' => 140000,
                'description' => 'A vintage rug to add character to your room.',
                'slug' => Str::slug('Vintage Rug'),
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://images-cdn.ubuy.co.in/65d43b66335c1a542a4eed5e-twinnis-boho-area-rug-vintage-tribal.jpg',
            ],
            [
                'name' => 'Decorative Mirror',
                'price' => 85000,
                'description' => 'A decorative mirror to enhance your interior design.',
                'slug' => Str::slug('Decorative Mirror'),
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'image_url' => 'https://dekorspace.com/cdn/shop/files/17384_jpg_533x.jpg?v=1701342925',
            ],
        ]);
    }
}
