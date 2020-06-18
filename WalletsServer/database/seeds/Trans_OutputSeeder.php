<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Trans_OutputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trans_output')->delete();
        $trans_output = array(
            array( 'amount' => '10000000', 'tx_index'=> '0','public_key' => '479ac40c45349a48fc30078dc98e226a0bc50b6f814eec2c3cb758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a0c1f6f0124ac87208', 'block_hash'=> '2c2b715483816534936da6afc38a921823784c14378abed4f7d767695e6337db'  ),
            array( 'amount' => '20000000', 'tx_index'=> '2','public_key' => 'c30078dc5349a484f98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb134662080c1f6f01f87a24ac87', 'block_hash'=> 'a921823784c14816534932c2b7154836da6afc367695e6337db4f7d78378abed'  ),
            array( 'amount' => '15000000', 'tx_index'=> '1','public_key' => 'd53e93da4078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543beed8f7b517424f9514183eb13466f870c1f6f01a24ac872085349a48fc30', 'block_hash'=> '932c2b7816534154836da6afc367695e6337db8ac14378abed4f7d7921823784'  ),
            array( 'amount' => '12000000', 'tx_index'=> '1','public_key' => 'c30078dc45349a48f98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb1344ac872080c1f6f0166f87a2', 'block_hash'=> '367695e633816534932c2b7154836da6afc7db8a92182378ed4f7d74c14378ab'  ),
            array( 'amount' => '50000000', 'tx_index'=> '2','public_key' => '349a48fc3450078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'block_hash'=> '816534932c2b7154836da6afc367695e6337db8a92c14378abed4f7d71823784'  ),
        );
        DB::table('trans_output')->insert($trans_output);
    }
}
