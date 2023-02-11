<?php

namespace Database\Seeders;

use App\Models\DefaultDelivery;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefaultDelivery::create(
            [
                'id'=>'1',
                'locality'=>'Адрес по умолчанию',
                'street'=>'Адрес по умолчанию',
                'home_number'=>'Адрес по умолчанию',
                'flat_number'=>'Адрес по умолчанию',
                'porch'=>'Адрес по умолчанию',
                'floor'=>'Адрес по умолчанию',
                'comment'=>'Адрес по умолчанию',
            ]
        );
    }
}
