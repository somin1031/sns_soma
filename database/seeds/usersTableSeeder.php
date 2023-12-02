<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'Alex',
            'mail' => 'alex@gmail.com',
            'password' => bcrypt('123456')]
        ]);
    }
}
