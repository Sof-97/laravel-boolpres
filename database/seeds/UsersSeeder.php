<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Gerardo';
        $user->email = 'test1@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        
    }
}
