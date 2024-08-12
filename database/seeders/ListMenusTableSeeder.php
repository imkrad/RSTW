<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListMenusTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_menus')->delete();
        
        \DB::table('list_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dashboard',
                'icon' => 'ri-apps-line',
                'route' => '/dashboard',
                'path' => 'Dashboard',
                'group' => 'Menu',
                'module' => 'Executive',
                'order' => 1,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
        ));

        
    }
}