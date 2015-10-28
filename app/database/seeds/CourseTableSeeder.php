<?php

class CourseTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert(array(
            'title'=>'Responsive Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('courses')->insert(array(
            'title'=>'HTML5/CSS3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('courses')->insert(array(
            'title'=>'Web Designing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

}