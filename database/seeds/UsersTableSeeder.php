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
        App\User::create([
        	'name'=>'jack',
        	'email'=>'jacknbq@gmail.com',
        	'password'=>bcrypt('password')
        ]);
    }
}
