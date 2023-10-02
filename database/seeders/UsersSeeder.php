<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@gmail.com',
            'preferred_gender' => 'Suspense',
            'password' => bcrypt('12345678'),
        ]);
    }
}
