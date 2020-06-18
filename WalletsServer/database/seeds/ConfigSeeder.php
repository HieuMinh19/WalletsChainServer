<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configs')->delete();
        $configs = array(
            array( 'difficult' => '1'),
            array( 'difficult' => '3'),
            array( 'difficult' => '2'),
            array( 'difficult' => '4'),
            array( 'difficult' => '5'),
        );
        DB::table('configs')->insert($configs);

    }
}
