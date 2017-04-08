<?php

use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tracks')->insert(array(
             
            array('track_name' => 'AngularJS',
            'number_of_courses' => 5,
            'courses_hours' => 25,
            'track_image_location' => '/images/angularjs.png',
            'track_description' => 'AngularJS is the superhero framework learn this to be a super hero!!!'),
            

            array('track_name' => 'Laravel',
            'number_of_courses' => 6,
            'courses_hours' => 65,
            'track_image_location' => '/images/laravel.png',
            'track_description' => 'This whole system is built in laravel I know you love it'),

            array('track_name' => 'HTML5',
            'number_of_courses' => 3,
            'courses_hours' => 9,
            'track_image_location' => '/images/HTML5.png',
            'track_description' => 'Adrein has some pretty cool html5 tuts'),

           array('track_name' => 'CSS3',
            'number_of_courses' => 15,
            'courses_hours' => 50,
            'track_image_location' => '/images/css.png',
            'track_description' => 'Adrein has some pretty cool css tuts')
    
        ));
     
    
        
    }
}
