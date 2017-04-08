<?php

use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('courses')->insert([
             
            'course_name' => 'AngularJS Getting Started',
            'course_description' => 'AngularJS is the superhero framework learn this to be a super hero!!!',
            'by_who' => 'Adrien Maranville',
            'level' => 'Intermidiate',
            'course_length'=> '4',
            'course_Star_rating' => '4',
            'course_downloads' => '/downloads/angularjsgettingstarted',
    
        ]);
    }
}
