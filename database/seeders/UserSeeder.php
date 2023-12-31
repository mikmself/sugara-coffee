<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id' =>  '4e8992b4-49ce-4ce4-b856-8310e499dfa9',
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'level' => 'superadmin',
            'address' => 'Rumahnya Superadmin'
        ]);
        User::create([
            'id' =>  '96d55693-cd5a-4704-824d-d6b124122a06',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'level' => 'admin',
            'address' => 'Rumahnya Admin'
        ]);
        User::create([
            'id' =>  'dbcca61e-75c1-4f11-a84e-6c7e8d86b7f0',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'level' => 'user',
            'address' => 'Rumahnya User',
            'telephone' => '6287837281928'
        ]);
    }
}
