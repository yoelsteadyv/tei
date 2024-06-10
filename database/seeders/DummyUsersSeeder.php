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
                "name" => 'Yoel Steady Valentino',
                "email" => 'yoelsteadyv@gmail.com',
                "role" => 'admin',
                "password" => bcrypt('123'),
            ],

        ];
        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
