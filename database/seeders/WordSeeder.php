<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Word::create([
        'ru_title'=>'Состояние',
        'eng_title'=>'Сondition',
        ]);
        Word::create([
            'ru_title'=>'Достойный',
            'eng_title'=>'worthy',
            ]);
            Word::create([
                'ru_title'=>'Идти',
                'eng_title'=>'Go',
                ]);
                Word::create([
                    'ru_title'=>'Спать',
                    'eng_title'=>'Sleep',
                    ]);
    }
}
