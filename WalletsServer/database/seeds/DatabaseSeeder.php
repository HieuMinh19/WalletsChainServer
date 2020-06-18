<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            UserSeeder::class,
            Trans_InputSeeder::class,
            Trans_OutputSeeder::class,
            BlockSeeder::class,
            ConfigSeeder::class,
        ]);
    }
}
