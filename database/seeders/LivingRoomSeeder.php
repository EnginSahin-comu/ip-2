<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivingRoom;

class LivingRoomSeeder extends Seeder
{
    public function run()
    {
        LivingRoom::create([
            'name' => 'Vintage Leather Sofa',
            'image' => 'https://www.designersofas4u.co.uk/images/pictures/karfasa-vintage/wellington-chesterfield-vintage-leather-sofa-suite.jpg?v=d1868f2e',
            'description' => 'A timeless piece with rich leather, perfect for a classic living room.',
            'price' => 799.99,
            'stock' => 8
        ]);

        LivingRoom::create([
            'name' => 'Industrial Coffee Table',
            'image' => 'https://m.media-amazon.com/images/I/81i+fOoogsL.jpg',
            'description' => 'An industrial-style coffee table with a metal frame and wooden top.',
            'price' => 349.99,
            'stock' => 12,
        ]);

        LivingRoom::create([
            'name' => 'Cozy Bean Bag',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1donHjNlF8LQQfKWsM1YfCPeRPliV-6NCPw&s',
            'description' => 'A comfy bean bag chair for those relaxing movie nights.',
            'price' => 99.99,
            'stock' => 20,
        ]);

        LivingRoom::create([
            'name' => 'Mid-Century Modern TV Stand',
            'image' => 'https://i5.walmartimages.com/seo/Mopio-Ensley-59-Low-Mid-Century-Modern-TV-Stand-Console-for-TV-Under-70_dcb4255a-a2e4-4fef-bc00-91a50cc40eb5.922868a6a2d37e4d55f7a93c25253635.jpeg',
            'description' => 'A sleek, retro-inspired TV stand with plenty of storage space.',
            'price' => 450.00,
            'stock' => 6,
        ]);

        LivingRoom::create([
            'name' => 'Plush Throw Blanket',
            'image' => 'https://cdni.llbean.net/is/image/wim/302781_440_46?hei=1095&wid=950&resMode=sharp2&defaultImage=llbprod/302781_440_41',
            'description' => 'A super soft, cozy blanket for extra comfort on cold evenings.',
            'price' => 45.99,
            'stock' => 30,
        ]);

        LivingRoom::create([
            'name' => 'Luxe Velvet Armchair',
            'image' => 'https://static.ufurnish.com/assets%2Fproduct-images%2Fdunelm%2F30826372%2Falfie-velvet-armchair-velvet-luxe-navy-3abc4c53.jpg',
            'description' => 'A luxurious velvet armchair that adds style and comfort to any room.',
            'price' => 599.99,
            'stock' => 5,
        ]);

        LivingRoom::create([
            'name' => 'Handmade Wicker Basket',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSE1FdUo5sJ86KEmLkHsKbXUJ47V7S6rkUgwQ&s',
            'description' => 'A rustic, handmade wicker basket to store your living room essentials.',
            'price' => 35.50,
            'stock' => 15,
        ]);

        LivingRoom::create([
            'name' => 'Geometric Wall Art',
            'image' => 'https://i.etsystatic.com/17379512/r/il/59082e/1510811692/il_570xN.1510811692_bt0g.jpg',
            'description' => 'A stunning piece of geometric art to brighten up your living space.',
            'price' => 150.00,
            'stock' => 10,
        ]);

        LivingRoom::create([
            'name' => 'Coastal Style Console Table',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrazG3m3iusCtO13Ls5ZqIknTiQ7nQ22TcRQ&s',
            'description' => 'A coastal-inspired console table, perfect for a beachy, relaxed vibe.',
            'price' => 230.00,
            'stock' => 7,
        ]);

        LivingRoom::create([
            'name' => 'Sculptural Floor Lamp',
            'image' => 'https://quatropi.com/cdn/shop/files/quatropi-quatropi-large-sculpture-floor-lamp-silhouette-feature-190cm-bubble-led-light-47793361813798.jpg?v=1724855353',
            'description' => 'An elegant, sculptural floor lamp that brings a modern touch to your decor.',
            'price' => 180.00,
            'stock' => 18,
        ]);
    }
}
