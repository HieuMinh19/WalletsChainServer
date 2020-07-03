<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        $users = array(
            array( 'name' => 'Hung', 'email' => 'hung@gmail.com', 'public_key'=> '45349a48fc30078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'password' => bcrypt('123456')),
            array( 'name' => 'Duc', 'email' => 'duc@gmail.com', 'public_key'=> '45349a48fc30078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'password' => bcrypt('123456')),
            array( 'name' => 'Hieu', 'email' => 'hieu@gmail.com', 'public_key'=> '45349a48fc30078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'password' => bcrypt('123456')),
            array( 'name' => 'Hao', 'email' => 'hao@gmail.com', 'public_key'=> '45349a48fc30078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'password' => bcrypt('123456')),
            array( 'name' => 'Admin', 'email' => 'admin@gmail.com', 'public_key'=> '45349a48fc30078dc98e226a0bc50b6f814eec2c3cb479ac40c758dd5d6fac68c0f543d53e93dabeed8f7b517424f9514183eb13466f87a24ac872080c1f6f01', 'password' => bcrypt('admin')),
        );
        DB::table('users')->insert($users);

    }
}
