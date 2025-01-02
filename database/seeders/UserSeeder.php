<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Syeich Khalil Annbiya",
                'email' => "syeichkhalil@gmail.com",
                'roles' => 'ADMIN',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Indra Frimawan",
                'email' => "indrafri@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Lia Martinez",
                'email' => "liamartinez@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Mohammed Ali",
                'email' => "mohammedali@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Sarah Lee",
                'email' => "sarahlee@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "James Smith",
                'email' => "jamessmith@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Isabella Johnson",
                'email' => "isabellajohnson@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "David Kim",
                'email' => "davidkim@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Olivia Brown",
                'email' => "oliviabrown@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Ethan Williams",
                'email' => "ethanwilliams@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Mia Wilson",
                'email' => "miawilson@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => "Lucas Davis",
                'email' => "lucasdavis@gmail.com",
                'roles' => 'USER',
                'password' => Hash::make('123456789'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']], // Benzersiz alan
                $user // Güncellenecek veya eklenecek veri
            );
        }
    }
}
