<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Husam Abuhajjaj',
            'email' => 'delphix2012@gmail.com',
            'password' => Hash::make('123456'),
            'api_token' => Str::random(60),
        ]);
    }
}
