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
    public function run()
    {
        return User::create([
            'name' => 'Nustar Admin',
            'email' => 'engineering@nustar.com',
            'password' => bcrypt('nustarstp')
        ]);
    }
}
