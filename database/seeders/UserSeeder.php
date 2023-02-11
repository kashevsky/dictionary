<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'id'=> 1,
            'name'=>'Vasya',
            'email'=>'vasya@vasya',
            'password'=> Hash::make('12345678'),
        ]);
        User::create([
            'id'=> 2,
            'name'=>'Jora',
            'email'=>'jora@jora',
            'password'=> Hash::make('12345678'),
        ]);
        User::create([
            'id'=> 3,
            'name'=>'Masha',
            'email'=>'masha@masha',
            'password'=> Hash::make('12345678'),
        ]);
    }
}
