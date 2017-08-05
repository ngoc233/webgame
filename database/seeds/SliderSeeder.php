<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <=5 ; $i++) { 
        DB::table('sliders')->insert(
        	[
        		'name' =>'ngoc233',
        		'alias'=>'ngoc233',
        		'image'=>'slider-'.$i.".jpg"
        	]
        	);
    	}

    }
}
