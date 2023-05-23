<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Michele',
                'email' => 'michele@gmail.com',
                'password'=> Hash::make('password'),
            ],
            [
                'name' => 'Davide',
                'email' => 'davide@gmail.com',
                'password'=> Hash::make('password'),
            ],
            [
                'name' => 'Giovannino',
                'email' => 'gio@gmail.com',
                'password'=> Hash::make('password'),
            ],
            [
                'name' => 'Marco',
                'email' => 'marco@gmail.com',
                'password'=> Hash::make('password'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
