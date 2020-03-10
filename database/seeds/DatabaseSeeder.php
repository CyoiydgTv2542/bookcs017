<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Chayanon Boonsong';
        $user->email = 'Cyoiydgtv2542@gmail.com';
        $user->password = Hash::make('daca1234');
        $user->save();
    }
}
