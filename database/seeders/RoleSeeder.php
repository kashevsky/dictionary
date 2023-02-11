<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role'=>'admin',
        ]);
        Role::create([
            'role'=>'customer',
        ]);
        Role::create([
            'role'=>'manager',
        ]);
        $users = User::get();
        foreach($users as $user)
        {
            $user->roles()->attach(rand(1,3));
        }
    }
}
