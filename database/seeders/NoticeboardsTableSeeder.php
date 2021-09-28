<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticeboards')->insert(
            [
                [
                    'subject' => 'T-shart distribution for 18th Foundation Anniversary',
                    'description' => 'Dear Student(s),
                        Greetings!!!                   
                        You will be pleased to know that the Faculty of Business and Entrepreneurship (FBE) is going to celebrate the 18th Founding Anniversary of DIU on January 24, 2020 at the Permanent Campus of the university. in this regard, Please collect your Food Token, Academic Calendar, and T-Shirt on 23 January 2020 at 3.30 PM from the BRE Office for celebrating the 18th Foundation Anniversary of DIU. Only Registered Students are eligible for all items.                  
                        Thank You',
                    'dept' => 'CSE',
                    'status' => 1
                ],
                [
                    'subject' => 'ESDM new students email ID',
                    'description' => 'Dear Students of Department of EEE collect the 18th Foundation Day T-shirt from Today (Sunday) at 3:00 pm.',
                    'dept' => 'EEE',
                    'status' => 1
                ],
                [
                    'subject' => 'NOTICE on Application for” TALENT SCHOLARSHIP" 2020',
                    'description' => 'Daffodil International University
                        102 Shukrabad, Mirpur Road, Dhanmondi, Dhaka-1207  
                        Date: 19 January 2020',
                    'dept' => 'All Dept',
                    'status' => 1
                ],
                [
                    'subject' => 'Class Routine & Transport Schedule of TE',
                    'description' => 'Faculty of Engineering (FE) is going to celebrate the much-awaited 18th Foundation Day of Daffodil International University at Permanent Campus, Ashulia.on 22 January 2020 (Wednesday)',
                    'dept' => 'CSE',
                    'status' => 1
                ],
                [
                    'subject' => 'Update Transport Schedule for MC Lab at PC',
                    'description' => 'Faculty of Engineering (FE) is going to celebrate the much-awaited 18th Foundation Day of Daffodil International University at Permanent Campus, Ashulia.on 22 January 2020 (Wednesday)',
                    'dept' => 'BBA',
                    'status' => 1
                ]
            ]
        );
    }
}
