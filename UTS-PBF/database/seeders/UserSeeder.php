<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'id' => '2',
            'name' => 'Ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('ali'),
            'role' => 'user',
        ]);

        User::create([
            'id' => '3',
            'name' => 'Raju',
            'email' => 'raju@gmail.com',
            'password' => bcrypt('raju'),
            'role' => 'raju',
        ]);

        User::factory()->count(20)->create();
    }
}
