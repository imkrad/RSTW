<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventListsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_lists')->delete();
        
        \DB::table('event_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Implementing and Enhancing Quality Control Program in the Chemical Laboratory',
                'schedule' => 'September 5-6, 2024',
                'is_wholeday' => 1,
                'is_alone' => 1,
                'event_id' => 1,
                'created_at' => '2024-08-12 08:35:03',
                'updated_at' => '2024-08-12 08:35:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ISO/IEC 17025:2017 Awareness Seminar',
                'schedule' => 'September 5, 2024',
                'is_wholeday' => 1,
                'is_alone' => 0,
                'event_id' => 2,
                'created_at' => '2024-08-12 08:35:38',
                'updated_at' => '2024-08-12 08:35:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Swab, Snag, and Sample: Air Plates and Surface Swabs Made Simple',
            'schedule' => 'September 6 (8:00 - 10:00 PM)',
                'is_wholeday' => 0,
                'is_alone' => 0,
                'event_id' => 3,
                'created_at' => '2024-08-12 08:36:12',
                'updated_at' => '2024-08-12 08:36:12',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Decoding Nutrition Facts: Your Guide to Smart Eating',
            'schedule' => 'September 6 (10:01 - 12:00 PM)',
                'is_wholeday' => 0,
                'is_alone' => 0,
                'event_id' => 3,
                'created_at' => '2024-08-12 08:36:12',
                'updated_at' => '2024-08-12 08:36:12',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Compliance at a Glance: Preparation of Control Charts',
            'schedule' => 'September 6 (1:00 - 5:00 PM)',
                'is_wholeday' => 0,
                'is_alone' => 0,
                'event_id' => 3,
                'created_at' => '2024-08-12 08:36:12',
                'updated_at' => '2024-08-12 08:36:12',
            ),
        ));

        
    }
}