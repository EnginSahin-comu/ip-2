<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveries = [
            [
                'user_id' => 1,
                'address' => '123 Main Street, Springfield',
                'city' => 'Springfield',
                'phone' => '555-1234',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'address' => '456 Elm Street, Shelbyville',
                'city' => 'Shelbyville',
                'phone' => '555-5678',
                'status' => 'Shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'address' => '789 Oak Avenue, Capital City',
                'city' => 'Capital City',
                'phone' => '555-9876',
                'status' => 'Delivered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'address' => '101 Maple Street, Ogdenville',
                'city' => 'Ogdenville',
                'phone' => '555-1111',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'address' => '202 Birch Lane, North Haverbrook',
                'city' => 'North Haverbrook',
                'phone' => '555-2222',
                'status' => 'Shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'address' => '303 Cedar Court, Brockway',
                'city' => 'Brockway',
                'phone' => '555-3333',
                'status' => 'Delivered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'address' => '404 Pine Street, Springfield',
                'city' => 'Springfield',
                'phone' => '555-4444',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'address' => '505 Oak Lane, Shelbyville',
                'city' => 'Shelbyville',
                'phone' => '555-5555',
                'status' => 'Shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'address' => '606 Willow Drive, Capital City',
                'city' => 'Capital City',
                'phone' => '555-6666',
                'status' => 'Delivered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'address' => '707 Ash Avenue, Ogdenville',
                'city' => 'Ogdenville',
                'phone' => '555-7777',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 11,
                'address' => '808 Cypress Street, North Haverbrook',
                'city' => 'North Haverbrook',
                'phone' => '555-8888',
                'status' => 'Shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'address' => '909 Redwood Lane, Brockway',
                'city' => 'Brockway',
                'phone' => '555-9999',
                'status' => 'Delivered',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('deliveries')->insert($deliveries);
    }
}
