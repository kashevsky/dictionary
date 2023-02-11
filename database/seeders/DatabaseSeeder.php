<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\WordSeeder;
use Database\Seeders\ProfileSeeder;
use Database\Seeders\DeliverySeeder;
use Database\Seeders\RoleUserSeeder;
use Database\Seeders\DefaultDeliverySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UserSeeder::class]);
        $this->call([DefaultDeliverySeeder::class]);
        $this->call([ProfileSeeder::class]);
        $this->call([WordSeeder::class]);
        $this->call([DeliverySeeder::class]);
        $this->call([RoleSeeder::class]);
        // $this->call([RoleUserSeeder::class]);

        

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
