<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('plans')->insert(array(
             
            array('name' => 'Monthly',
            'price' => 3500),

            array('name' => 'Yearly',
            'price' => 19700)
        ));
    }
}
