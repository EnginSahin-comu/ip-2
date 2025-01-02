<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ProductSeeder::class,
            ProductTagSeeder::class,
            DeliverySeeder::class,
            ShowcaseSeeder::class,
            RewardSeeder::class,
            LivingRoomSeeder::class,
            ChildrenRoomSeeder::class,
            DecorationSeeder::class,
        ]);
    }
}
