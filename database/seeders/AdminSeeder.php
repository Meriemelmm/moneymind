<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'douae',
            'email' => 'douae@gmail.com',
            'password' => bcrypt('douae2024'),
            'role' => 'admin', 
        ]);
    }
}

