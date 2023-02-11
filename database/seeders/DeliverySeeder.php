<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::create(
            [
                'id'=>'1',
                'locality'=>'Минск',
                'profile_id'=>'1',
                'street'=>'Лобанка',
                'home_number'=>'52',
                'flat_number'=>'76',
                'porch'=>'2',
                'floor'=>'9',
                'comment'=>'Захватить покушать',
            ]
        );
        Delivery::create(
            [
                'id'=>'2',
                'locality'=>'Минск',
                'street'=>'Одинцова',
                'profile_id'=>'2',
                'home_number'=>'79',
                'flat_number'=>'103',
                'porch'=>'1',
                'floor'=>'5',
                'comment'=>'Захватить попить',
            ]
        );
    }
}
