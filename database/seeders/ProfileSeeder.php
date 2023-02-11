<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
        'id'=> 1,
        'full_name'=>'Василий Петров Васильевич',
        'phone_number'=>'80292221133',
        'birth'=>'2021-02-12'
        ]);
        Profile::create([
            'id'=> 2,
            'full_name'=>'Георгий Васильев Георгевич',
            'phone_number'=>'80292221133',
            'birth'=>'2021-02-12'
            ]);
    }
}
