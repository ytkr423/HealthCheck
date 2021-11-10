<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者
        \App\User::create([
            'name'=>'管理者X',
            'email'=>'owner@email.com',
            'password'=>bcrypt('xxxxxxxx'),
            'role'=>'owner'
        ]);

        // 患者さん
        \App\User::create([
            'name'=>'患者様X',
            'email'=>'customer@email.com',
            'password'=>bcrypt('yyyyyyyy'),
            'role'=>'customer'
        ]);
    }
}
