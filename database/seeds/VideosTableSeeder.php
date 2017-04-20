<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(array(       
            array('course_id' => 1,
            'video_title' => 'Why is Angular SuperHeroic?',
            'video_location' => 'https://www.youtube.com/embed/fnsi2JpEWSo'),
             array('course_id' => 1,
            'video_title' => 'Angular 2 Crash Course',
            'video_location' => 'https://www.youtube.com/embed/-zW1zHqsdyc')

        ));
    }
}
