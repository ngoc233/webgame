<?php

use Illuminate\Database\Seeder;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <=133 ; $i++) { 
	        DB::table('severs')->insert(
	        	[
	        		'name' => $i,
	        		'title'=> 'server demo'
	        	]);
    	}

    }
}
