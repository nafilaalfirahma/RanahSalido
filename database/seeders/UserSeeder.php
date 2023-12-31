<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Administrator',
                'email' => 'administrator@gmail.com',
                'usertype' => 'admin',
                'password' => bcrypt('adminranahsalido')
            ], 
            [
                'name' => 'Keuangan',
                'email' => 'keuangan@gmail.com',
                'usertype' => 'keuangan',
                'password' => bcrypt('keuangan')
            ], 

            ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
