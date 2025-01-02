<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChildrenRoom;

class ChildrenRoomSeeder extends Seeder
{
    public function run()
    {
        ChildrenRoom::create([
            'name' => 'Colorful Bunk Bed',
            'image' => 'https://example.com/images/bunk-bed.jpg',
            'description' => 'A fun and vibrant bunk bed for kids.',
            'price' => 499.99,
            'stock' => 7,
        ]);

        ChildrenRoom::create([
            'name' => 'Toy Organizer Cabinet',
            'image' => 'https://example.com/images/toy-organizer.jpg',
            'description' => 'A spacious cabinet for organizing toys and books.',
            'price' => 199.99,
            'stock' => 10,
        ]);

        ChildrenRoom::create([
            'name' => 'Kids Study Desk',
            'image' => 'https://example.com/images/study-desk.jpg',
            'description' => 'A compact and ergonomic desk for study time.',
            'price' => 149.99,
            'stock' => 12,
        ]);

        ChildrenRoom::create([
            'name' => 'Play Tent',
            'image' => 'https://example.com/images/play-tent.jpg',
            'description' => 'A cozy play tent for endless fun.',
            'price' => 79.99,
            'stock' => 15,
        ]);

        ChildrenRoom::create([
            'name' => 'Soft Bean Bag Chair',
            'image' => 'https://example.com/images/bean-bag.jpg',
            'description' => 'A comfy bean bag chair for reading and relaxation.',
            'price' => 89.99,
            'stock' => 8,
        ]);

        ChildrenRoom::create([
            'name' => 'Kids Bookshelf',
            'image' => 'https://example.com/images/bookshelf.jpg',
            'description' => 'A wooden bookshelf for storing storybooks and toys.',
            'price' => 119.99,
            'stock' => 6,
        ]);

        ChildrenRoom::create([
            'name' => 'Colorful Rug',
            'image' => 'https://example.com/images/colorful-rug.jpg',
            'description' => 'A soft and colorful rug to brighten up the room.',
            'price' => 59.99,
            'stock' => 20,
        ]);

        ChildrenRoom::create([
            'name' => 'Night Light Lamp',
            'image' => 'https://example.com/images/night-light.jpg',
            'description' => 'A cute night light for peaceful sleep.',
            'price' => 39.99,
            'stock' => 18,
        ]);

        ChildrenRoom::create([
            'name' => 'Activity Table Set',
            'image' => 'https://example.com/images/activity-table.jpg',
            'description' => 'A colorful table and chair set for arts and crafts.',
            'price' => 129.99,
            'stock' => 5,
        ]);

        ChildrenRoom::create([
            'name' => 'Toy Box',
            'image' => 'https://example.com/images/toy-box.jpg',
            'description' => 'A large toy box to keep the room tidy.',
            'price' => 89.99,
            'stock' => 9,
        ]);
    }
}
