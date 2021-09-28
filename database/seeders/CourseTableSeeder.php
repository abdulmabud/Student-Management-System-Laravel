<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                [
                    'title' => 'Laravel',
                    'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things',
                    'photo' => 'laravel.jpg',
                    'status' => 1
                ],
                [
                    'title' => 'Mathematics',
                    'description' => 'Mathematics solves problems by using logic. One of the main tools of logic used by mathematicians is deduction. Deduction is a special way of thinking to discover and prove new truths using old truths. ',
                    'photo' => 'math.jpg',
                    'status' => 1
                ],
                [
                    'title' => 'Bangla',
                    'description' => 'Logic and reasoning are used by mathematicians to create general rules, which are an important part of mathematics. These rules leave out information that is not important so that a single rule can cover many situations. By finding general rules, mathematics solves many problems at the same time as these rules can be used on other problems',
                    'photo' => 'bangla.jpg',
                    'status' => 1
                ],
                [
                    'title' => 'English',
                    'description' => 'Reading is an exercise in language learning. Reading English novels will help improve your vocabulary, general understanding and in some cases it may even give you more knowledge into different countries and their cultures',
                    'photo' => 'english.webp',
                    'status' => 1
                ],
            ]
        );
    }
}
