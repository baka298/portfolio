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
            'name' => 'Hajji Sami',
            'email' => 'hajji1993@hotmail.com',
            'password' => bcrypt('Pandora2008'),
            'remember_token' => str_random(10),
        ]);
    }
}
