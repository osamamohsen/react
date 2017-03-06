<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker = Facker::create();
        \App\User::create([
            'first_name' => $facker->name,
            'last_name' => $facker->name,
            'email' => $facker->email,
        ]);
    }
}
