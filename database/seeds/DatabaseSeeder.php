<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
    //    $this->call(CoursesSeeder::class);
    //     $this->call(TracksTableSeeder::class);
    //     $this->call(CoursesTracksTableSeeder::class);
    //     $this->call(VideosTableSeeder::class);
         $this->call(PlansSeeder::class);
    }
}
