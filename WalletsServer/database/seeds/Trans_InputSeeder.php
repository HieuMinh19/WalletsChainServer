<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Trans_InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trans_input')->delete();
        $trans_input = array(
            array( 'tx_hash' => '836da6afc36764337db8a921823784c14378abed4f7d795e6816534932c2b715', 'tx_index'=> '0','strip_sign' => '4932c2b715481653836da6afc367695e6337db8a921823784c147378abed4f7d', 'block_hash'=> '1'  ),
            array( 'tx_hash' => '836da6afc36764337db8a921823784c14378abed4f7d795e6816534932c2b715', 'tx_index'=> '0','strip_sign' => '4932c2b715481653836da6afc367695e6337db8a921823784c147378abed4f7d', 'block_hash'=> '2'  ),
        );
        DB::table('trans_input')->insert($trans_input);
    }
}
