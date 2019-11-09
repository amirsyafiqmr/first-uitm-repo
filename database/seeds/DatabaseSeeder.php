<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Amir Syafiq Mohd Rizuan',
            'email' => 'amirsyafiqmohdrizuan@gmail.com',
            'password' => bcrypt('password'),

        ]);

        DB::table('users')->insert([
            'name' => 'Mohd Rizuan',
            'email' => 'mohdrizuan@gmail.com',
            'password' => bcrypt('password'),

        ]);
    }
}
