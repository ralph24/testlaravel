<?php

use Illuminate\Database\Seeder;
use laraveltest\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(User::class, 10000)->create();
        
    }
}
