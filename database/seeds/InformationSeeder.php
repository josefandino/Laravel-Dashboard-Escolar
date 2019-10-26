<?php

use App\Information;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Information::create([
                'phrase_id' => 'dev',
                'name_info' => 'Developer',
            ]);

            \App\Information::create([
                'phrase_id' => 'sys',
            'name_info' => 'FanWebs-SYS',
            ]);

            \App\Information::create([
                'phrase_id' => 'phone',
                'name_info' => '+51 971 888 294',
            ]);

            \App\Information::create([
                'phrase_id' => 'email',
                'name_info' => 'fanwebs1@gmail.com',
            ]);
    }
}

