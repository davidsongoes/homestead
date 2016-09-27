<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<27; $i++){
            $user = new \Jobs\User();
            $user->name = "User ($i)";
            $user->email = "eser{$i}@gmail.com";
            $user->phone = mt_rand(100000000, 999999999);
            $user->save();
        }
    }
}
