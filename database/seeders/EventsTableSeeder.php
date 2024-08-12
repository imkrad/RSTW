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
                'created_at' => '2024-08-12 08:34:26',
                'updated_at' => '2024-08-12 08:34:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Training II',
                'created_at' => '2024-08-12 08:34:26',
                'updated_at' => '2024-08-12 08:34:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Training III',
                'created_at' => '2024-08-12 08:34:44',
                'updated_at' => '2024-08-12 08:34:44',
            ),
        ));

        
    }
}