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
            'name'      => 'Mohamed',
            'email'     => 'mohamed@gmail.com',
            'password'  => Hash::make('password'),
        ]);

        User::create([
            'name'      => 'Ahmed',
            'email'     => 'ahmed@gmail.com',
            'password'  => Hash::make('password'),
        ]);
    }
}