<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $showcases = [
            ['title' => 'Modern Living Room', 'description' => 'Discover the latest trends in living room design with our modern showcase.', 'image_url' => 'https://fancyhouse-design.com/wp-content/uploads/2024/03/Warm-wood-tones-add-a-cozy-touch-to-the-modern-living-room-enhancing-its-inviting-atmosphere.jpg', 'status' => 'Active'],
            ['title' => 'Elegant Bedroom', 'description' => 'Transform your bedroom into a luxurious retreat with our ideas.', 'image_url' => 'https://miro.medium.com/v2/resize:fit:2000/1*eNKQwzctNuM4GTCVIUBanQ.jpeg', 'status' => 'Active'],
            ['title' => 'Kitchen Inspirations', 'description' => 'Explore our showcase for innovative kitchen designs.', 'image_url' => 'https://edwardgeorgelondon.com/wp-content/uploads/2024/07/8kitcheninspirationskitchendesignideasdecor6331715.jpgv=1711455683', 'status' => 'Active'],
            ['title' => 'Outdoor Spaces', 'description' => 'Ideas to create stunning outdoor spaces.', 'image_url' => 'https://cdn.prod.website-files.com/63a02e61e7ffb565c30bcfc7/666ac559c22b239e32cc35b0_outdoor%20living%20space%20ideas.webp', 'status' => 'Active'],
            ['title' => 'Home Office', 'description' => 'Make your workspace stylish and functional.', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ48gbPiB-GIUWJNQQbt-dPo6sPhN9mej_bA&s', 'status' => 'Active'],
            ['title' => 'Luxury Bathrooms', 'description' => 'Relax in style with luxury bathroom designs.', 'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsiT6hnKryjIve0y2FSpx4IOGMLslKMuhPEQ&s', 'status' => 'Active'],
            ['title' => 'Kids Room', 'description' => 'Fun and colorful ideas for kids’ rooms.', 'image_url' => 'https://mamaandpeaches.com/cdn/shop/articles/MAMA_BLOG1.png?v=1690271398', 'status' => 'Active'],
            ['title' => 'Dining Room', 'description' => 'Elegant dining room setups.', 'image_url' => 'https://www.marthastewart.com/thmb/XeQPTA5L3FJar2Kse2Me03dsXxk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/BethanyAdamsInteriors_ModernTudor_LouisvilleKY73-e4c6f2d0efe64d85b5d00fa72be491ed.jpg', 'status' => 'Active'],
            ['title' => 'Hallway Designs', 'description' => 'Make your hallway stand out.', 'image_url' => 'https://edwardgeorgelondon.com/wp-content/uploads/content/A_cohesive_modern_hallway_design_incorporating_clean_lines_neutral_colors_and_personalized_decor_elements3.png', 'status' => 'Active'],
            ['title' => 'Cozy Corners', 'description' => 'Create the perfect cozy corner in your home.', 'image_url' => 'https://www.behr.com/colorfullybehr/wp-content/uploads/2021/03/AP9Y1102_v2-cropped--740x1024.jpg', 'status' => 'Active'],
            ['title' => 'Small Spaces', 'description' => 'Design tips for small spaces.', 'image_url' => 'https://api.deepai.org/job-view-file/ffce55c2-eec2-4128-9a63-0d3de6373fe8/outputs/output.jpg?art-image=true', 'status' => 'Active'],
            ['title' => 'Vintage Charm', 'description' => 'Add a touch of vintage charm to your home.', 'image_url' => 'https://api.deepai.org/job-view-file/f57b1601-3cf3-47e8-a1b8-6e3a0ceef7b0/outputs/output.jpg?art-image=true', 'status' => 'Active'],
        ];

        foreach ($showcases as $showcase) {
            DB::table('showcases')->insert(array_merge($showcase, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
