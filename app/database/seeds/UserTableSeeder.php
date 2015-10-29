<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            'username'=>'jacksparrow',
            'password' => Hash::make('123456'),
            'role' => 1,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('users')->insert(array(
            'username'=>'thong@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 1,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

}