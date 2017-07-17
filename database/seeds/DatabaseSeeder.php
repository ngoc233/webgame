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
    	DB::table('users')->insert(
    		[
    			'id' => 1,
    			'name'=>'admin',
    			'email'=>'ngoc23319952@gmail.com',
    			'password'=>bcrypt('admin123456'),
    			'group'   =>1,
                

    		]);
    }
}
