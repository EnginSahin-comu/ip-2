<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
{
    public function run(): void
    {
        $rewards = [
            [
                'name' => 'Gift Card $10',
                'description' => 'Redeem this reward for a $10 gift card.',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-95B9ijzg4MU1fDEiPaKz05w806WOaQCM-A&s',
                'points_required' => 100,
                'status' => 'Active',
            ],
            [
                'name' => 'Free Shipping',
                'description' => 'Get free shipping on your next order.',
                'image_url' => 'https://t4.ftcdn.net/jpg/04/21/17/37/360_F_421173720_VCRtkONOOmhaMefv1A7BQVHWaINe0aMM.jpg',
                'points_required' => 50,
                'status' => 'Active',
            ],
            [
                'name' => 'Exclusive Discount',
                'description' => 'Enjoy an exclusive 20% discount.',
                'image_url' => 'https://static.vecteezy.com/system/resources/previews/013/336/339/non_2x/megaphone-with-banner-tag-sign-exclusive-offer-flat-illustration-vector.jpg',
                'points_required' => 200,
                'status' => 'Active',
            ],
            [
                'name' => 'Free Product Sample',
                'description' => 'Get a free sample of our latest product.',
                'image_url' => 'https://ps.w.org/woo-free-product-sample/assets/icon-256x256.png?rev=2279441',
                'points_required' => 75,
                'status' => 'Active',
            ],
            [
                'name' => 'VIP Event Access',
                'description' => 'Get access to an exclusive VIP event.',
                'image_url' => 'https://ibembepatrick.com/wp-content/uploads/2023/01/6467106105_bf948c35ff_b.jpg',
                'points_required' => 300,
                'status' => 'Active',
            ],
            [
                'name' => 'Exclusive Membership',
                'description' => 'Enjoy a one-year exclusive membership.',
                'image_url' => 'https://as2.ftcdn.net/v2/jpg/00/87/38/29/1000_F_87382974_vLhi3tLBdbYrJ5LGPoZLemhg9n93O0TA.jpg',
                'points_required' => 500,
                'status' => 'Active',
            ],
            [
                'name' => 'Discount Code $15',
                'description' => 'Get a $15 discount code for your next purchase.',
                'image_url' => 'https://api.deepai.org/job-view-file/09957183-71a6-4793-bc28-59c84564c510/outputs/output.jpg?art-image=true',
                'points_required' => 150,
                'status' => 'Active',
            ],
            [
                'name' => 'Coffee Mug',
                'description' => 'Receive a custom coffee mug.',
                'image_url' => 'https://m.media-amazon.com/images/I/61nv-RwdxsL.jpg',
                'points_required' => 80,
                'status' => 'Active',
            ],
            [
                'name' => 'Branded T-Shirt',
                'description' => 'Get a branded T-shirt from our collection.',
                'image_url' => 'https://cdn.dsmcdn.com/mnresize/400/-/ty1136/product/media/images/prod/PIM/20240115/06/fb409d94-f05a-4266-b8bc-970aa0f7119e/1_org_zoom.jpg',
                'points_required' => 120,
                'status' => 'Active',
            ],
            [
                'name' => 'Holiday Discount',
                'description' => 'Get 25% off on holiday purchases.',
                'image_url' => 'https://biovinc.com/wp-content/uploads/2019/12/holiday-discount-1024x512-1.jpg',
                'points_required' => 180,
                'status' => 'Active',
            ],
            [
                'name' => 'Early Access',
                'description' => 'Enjoy early access to new collections.',
                'image_url' => 'https://thumbs.dreamstime.com/b/early-access-rubber-stamp-text-early-access-inside-illustration-108747396.jpg',
                'points_required' => 250,
                'status' => 'Active',
            ],
            [
                'name' => 'Exclusive Sneak Peek',
                'description' => 'Be the first to preview upcoming designs.',
                'image_url' => 'https://i.ytimg.com/vi/GfasGqApdQA/hqdefault.jpg',
                'points_required' => 130,
                'status' => 'Active',
            ],
        ];

        foreach ($rewards as $reward) {
            DB::table('rewards')->insert([
                'name' => $reward['name'],
                'description' => $reward['description'],
                'image_url' => $reward['image_url'],
                'points_required' => $reward['points_required'],
                'status' => $reward['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
