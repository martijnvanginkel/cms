<?php

use Illuminate\Database\Seeder;
use charmfarmer\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Martijn',
          'email' => 'martijn@martijn.com',
          'password' => bcrypt('martijn'),
      ]);
    }
}
