<?php

namespace Database\Seeders;

use App\Models\Decoration;
use Illuminate\Database\Seeder;

class DecorationSeeder extends Seeder
{
    public function run()
    {
        Decoration::create([
            'name' => 'Vintage Lamp',
            'image' => 'https://m.media-amazon.com/images/I/61EnMD+KhqL.jpg',
            'description' => 'A charming vintage-style lamp for your living room.',
            'price' => 199.99,
            'stock' => 12,
        ]);

        Decoration::create([
            'name' => 'Modern Vase',
            'image' => 'https://m.media-amazon.com/images/I/61LO5HcSSrL._AC_SL1500_.jpg',
            'description' => 'A sleek and modern vase for contemporary decor.',
            'price' => 89.99,
            'stock' => 25,
        ]);

        Decoration::create([
            'name' => 'Wooden Sculpture',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8iqwT4psqVA5nHF33JQDDTz1-w1TUm3aXXw&s',
            'description' => 'A beautiful hand-crafted wooden sculpture.',
            'price' => 149.99,
            'stock' => 15,
        ]);

        Decoration::create([
            'name' => 'Abstract Wall Art',
            'image' => 'https://images-cdn.ubuy.co.in/64ceaf0ae180be24ec6eee66-abstract-pictures-canvas-wall-art-for.jpg',
            'description' => 'An eye-catching abstract painting to brighten your walls.',
            'price' => 250.00,
            'stock' => 10,
        ]);

        Decoration::create([
            'name' => 'Ceramic Bowl',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZQhJIPrkDOiQDYujplnDMQxxkVsggFWt4uw&s',
            'description' => 'A stylish ceramic bowl for fruits or decorative use.',
            'price' => 69.99,
            'stock' => 18,
        ]);

        Decoration::create([
            'name' => 'Geometric Shelf',
            'image' => 'https://m.media-amazon.com/images/I/71HKn8lGYcL.jpg',
            'description' => 'A modern geometric-shaped shelf for your decor.',
            'price' => 129.99,
            'stock' => 20,
        ]);

        Decoration::create([
            'name' => 'Rattan Basket',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRWB0M50f0SvZdN8BwxO1vhRWq18GXE6gBWA&s',
            'description' => 'A stylish and durable rattan basket for storage.',
            'price' => 39.99,
            'stock' => 30,
        ]);

        Decoration::create([
            'name' => 'Crystal Chandelier',
            'image' => 'https://m.media-amazon.com/images/I/71cKbryzK-L.jpg',
            'description' => 'An elegant crystal chandelier to enhance your living space.',
            'price' => 499.99,
            'stock' => 5,
        ]);

        Decoration::create([
            'name' => 'Decorative Mirror',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzksy7H7sUll10ev5n4qibBGoIVFukC9T9CQ&s',
            'description' => 'A stunning decorative mirror to add a stylish touch.',
            'price' => 120.00,
            'stock' => 8,
        ]);

        Decoration::create([
            'name' => 'Decorative Throw Blanket',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlEPF8kGvsJb3h3AmxcGQAEDcsWRp-TIig0g&s',
            'description' => 'A cozy and decorative throw blanket for your sofa.',
            'price' => 59.99,
            'stock' => 50,
        ]);

        Decoration::create([
            'name' => 'Metal Candle Holder',
            'image' => 'https://m.media-amazon.com/images/I/711chxtLKJL.jpg',
            'description' => 'A stylish metal candle holder for a touch of elegance.',
            'price' => 29.99,
            'stock' => 40,
        ]);

        Decoration::create([
            'name' => 'Wooden Clock',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR98bE0EOORWw3B8cgqEYmx6VAkfaEwWmAhAw&s',
            'description' => 'A rustic wooden clock to give your room a vintage feel.',
            'price' => 79.99,
            'stock' => 16,
        ]);
    }
}
