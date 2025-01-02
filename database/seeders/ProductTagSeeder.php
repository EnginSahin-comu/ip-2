<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $productTags = [
            ['product_id' => 1, 'tag_id' => 1],
            ['product_id' => 1, 'tag_id' => 2],
            ['product_id' => 2, 'tag_id' => 3],
            ['product_id' => 3, 'tag_id' => 1],
            ['product_id' => 3, 'tag_id' => 4],
        ];

        foreach ($productTags as $productTag) {
            DB::table('product_tags')->insert([
                'product_id' =>  $productTag['product_id'],
                'tag_id' => $productTag['tag_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
