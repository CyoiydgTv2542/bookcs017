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
        $user=new\App\User();
        $user->name='sansern';
        $user->email='sansern.par@gmail.com';
        $user->password= Hash::make('1234');
        $user->save();
    }
}
