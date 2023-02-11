<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create([
            'user_id'=>1,
            'role_id'=>1
        ]);
        RoleUser::create([
            'user_id'=>2,
            'role_id'=>2
        ]);
        RoleUser::create([
            'user_id'=>3,
            'role_id'=>3
        ]);
    }
}
