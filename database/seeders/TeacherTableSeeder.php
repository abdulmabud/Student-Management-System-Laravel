<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert(
           [
                [
                'Name' => 'Mr David Doe',
                'Phone' => '043432344324',
                'Email' => 'daviddoe21@gmail.com',
                'photo' => 'Teacher01.png',
                'Status' => 'Publish'
            ],
            [
                'Name' => 'Mr John Potter',
                'Phone' => '35345 3535',
                'Email' => 'jonedoe@gmail.com',
                'photo' => 'Teacher02.jpg',
                'Status' => 'Publish'
            ],
            [
                'Name' => 'Md Tanvir Kobir',
                'Phone' => '1166233535',
                'Email' => 'tanvir433@gmail.com',
                'photo' => 'Teacher03.jpg',
                'Status' => 'Publish'
            ],
            [
                'Name' => 'Akash Ahmed',
                'Phone' => '09873sdf423',
                'Email' => 'akash09er@gmail.com',
                'photo' => 'Teacher04.jpg',
                'Status' => 'Publish'
            ]
           ]
    
            );
    }
}
