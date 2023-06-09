<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_users = [
            [
                'role_id' => 1,
                'user_id' => 1,
            ],
        ];
        foreach($role_users as $role_user){
            DB::table('role_user')->insert($role_user);
        }
    }
}
