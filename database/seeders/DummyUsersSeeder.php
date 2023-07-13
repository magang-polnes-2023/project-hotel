<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('12345678'),
                'usertype' => 'admin',
                'phone' => '088888888888'
            ],
            [
                'name' => 'Customer 1',
                'email' => 'customer1@gmail.com',
                'password' => bcrypt('12345678'),
                'usertype' => 'user',
                'phone' => '088888888888'
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
