<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blocks')->delete();
        $blocks = array(
            array( 'previous_hash' => '0', 'transactions'=> 'my genesis block!!','hash_data' => '816534932c2b7154836da6afc367695e6337db8a921823784c14378abed4f7d7', 'nonce'=> '0', 'timestamp'=> '6511454705'  ),
            array( 'previous_hash' => '1', 'transactions'=> 'my genesis block hihi!!','hash_data' => 'a6afc36816534932c2b715483623784c1437d7695eb8a92188abed4f7d76337d', 'nonce'=> '1', 'timestamp'=> '5465411035'  ),
            array( 'previous_hash' => '2', 'transactions'=> 'my jiji genesis block!!','hash_data' => '48366581534932c2b7137db8a9213676823784cda6afc95e631a4378bed4f7d7', 'nonce'=> '2', 'timestamp'=> '1464705515'  ),
            array( 'previous_hash' => '3', 'transactions'=> 'my genesis block!!','hash_data' => '2b7154816534932c83db8a9378abed21823784c146da6afc367695e63374f7d7', 'nonce'=> '1', 'timestamp'=> '5114654705'  ),
            array( 'previous_hash' => '4', 'transactions'=> 'my genesis block!!','hash_data' => '5e6337db88162b7154836da6af823784c36769a921c14378abed4f7d7534932c', 'nonce'=> '1', 'timestamp'=> '1465154570'  ),
        );
        DB::table('blocks')->insert($blocks);
    }
}
