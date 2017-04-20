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
       DB::table('courses')->insert(array(
             
            array('course_name' => 'AngularJS Getting Started',
            'course_description' => 'AngularJS is the superhero framework learn this to be a super hero!!!',
            'by_who' => 'Adrien Maranville',
            'level' => 'Intermediate',
            'course_length'=> '4',
            'course_Star_rating' => '10',
            'course_downloads' => '/downloads/angularjsgettingstarted'),

            array('course_name' => 'HTML5 working with frameworks',
            'course_description' => 'Bootstrap and foundation are awesome',
            'by_who' => 'Adrien Maranville',
            'level' => 'Beginner',
            'course_length'=> '4',
            'course_Star_rating' => '10',
            'course_downloads' => '/downloads/html5workingwithframeworks'),
    
            array('course_name' => 'git basics',
            'course_description' => 'learn the basics of git',
            'by_who' => 'Andrew Southwick',
            'level' => 'Beginner',
            'course_length'=> '4',
            'course_Star_rating' => '4',
            'course_downloads' => '/downloads/gitbasics')
        ));
    }
}
