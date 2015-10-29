<?php

class LessionTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lessions')->delete();
        DB::table('lessions')->insert(array(
            'title'=>'This is lession 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'This is lession 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('lessions')->insert(array(
            'title'=>'This is lession 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'course_id'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));


    }

}