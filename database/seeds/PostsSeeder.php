<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <100 ; $i++) { 
       DB::table('posts')->insert(
       	[
       		'name' => 'Sự Kiện - Nạp Xu Liên Tiếp Chọn Quà 21/07-25/07',
       		'alias'=> 'this is alias',
       		'description'=>'Sự Kiện - Nạp Xu Liên Tiếp Chọn Quà 21/07-25/07',
       		'content'	 =>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
			'image'		=> 'SCPwpqr0YP-item-2.jpg',
			'title'		=> 'Sự Kiện - Nạp Xu Liên Tiếp Chọn Quà 21/07-25/07',
			'cate_id'	=> '2',
			'is_active'	=> '1'
       	]
       	);
    	}
    }
}
