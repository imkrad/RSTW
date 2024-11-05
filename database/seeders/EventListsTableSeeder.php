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
                'name' => 'SAFE FOODS, SMART MOVES: A guide for MSMEs',
                'schedule' => 'November 21, 2024',
                'is_wholeday' => 1,
                'is_alone' => 0,
                'event_id' => 1,
                'created_at' => '2024-08-12 16:35:03',
                'updated_at' => '2024-08-12 16:35:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mastering Method Validation / Verification in Gravimetric and Titrimetric Analyses',
                'schedule' => 'November 21-22, 2024',
                'is_wholeday' => 1,
                'is_alone' => 1,
                'event_id' => 2,
                'created_at' => '2024-08-12 16:35:38',
                'updated_at' => '2024-08-12 16:35:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Calibration and Checking of Measuring Instrument commonly used in Industries',
                'schedule' => 'November 22, 2024',
                'is_wholeday' => 1,
                'is_alone' => 0,
                'event_id' => 3,
                'created_at' => '2024-08-12 16:36:12',
                'updated_at' => '2024-08-12 16:36:12',
            ),
        ));

        
    }
}