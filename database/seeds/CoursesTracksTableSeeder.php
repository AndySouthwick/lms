<?php

use Illuminate\Database\Seeder;

class CoursesTracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses_tracks')->insert(array(
             
            array('course_id' => 1,
            'track_id' => 1,
            ),
               array('course_id' => 3,
            'track_id' => 1,
            ),
             array('course_id' => 3,
            'track_id' => 2,
            ),
             array('course_id' => 3,
            'track_id' => 3,
            ),
             array('course_id' => 3,
            'track_id' => 4,
            ),
            
            ));
        }
}
