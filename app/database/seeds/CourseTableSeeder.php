<?php

class CourseTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert(array(
            'title'=>'Responsive Design',
            'description' => 'Responsive Web Design makes your web page look good on all devices (desktops, tablets, and phones).',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('courses')->insert(array(
            'title'=>'HTML5/CSS3',
            'description' => 'Want to learn a different language? How about learning HTML5 and CSS3? Over the course of 21 episodes, our friend Bob Tabor will teach you the fundamentals of HTML5 & CSS3 programming. ',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));

        DB::table('courses')->insert(array(
            'title'=>'JavaScript',
            'description' => 'JavaScript is the programming language of HTML and the Web. Programming makes computers do what you want them to do.JavaScript is easy to learn.',
            'createdby'=> 1 ,
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

}