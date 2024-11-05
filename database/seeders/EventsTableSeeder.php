<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Training I',
                'maximum' => 1000,
                'count' => 0,
                'created_at' => '2024-08-12 16:34:26',
                'updated_at' => '2024-08-13 02:06:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Training II',
                'maximum' => 1000,
                'count' => 0,
                'created_at' => '2024-08-12 16:34:26',
                'updated_at' => '2024-08-13 03:44:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Training III',
                'maximum' => 1000,
                'count' => 0,
                'created_at' => '2024-08-12 16:34:44',
                'updated_at' => '2024-08-13 03:26:33',
            ),
        ));

        
    }
}