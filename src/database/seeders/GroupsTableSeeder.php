<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
                'id' => 1,
                'leader' =>3,
                'creator' =>1,
                'name' => 'Founder',      
                'desc' => 'app creator',
                'created_at' => date('Y-m-d H:i:s'),                
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'leader' =>4,
                'creator' =>1,
                'name' => 'Demo',      
                'desc' => 'Demo Group',
                'created_at' => date('Y-m-d H:i:s'),                
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
