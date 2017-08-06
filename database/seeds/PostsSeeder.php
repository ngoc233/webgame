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
    	for ($i=0; $i <30 ; $i++) { 
       DB::table('posts')->insert(
       	[
       		'name' => 'Sự Kiện Đặc Biệt Cây Cầu Nguyện, Hạnh Vận Thất Tức Trận + Hạnh Vận Giác Ngộ',
       		'alias'=> 'this is alias',
       		'description'=>'TSự Kiện Đặc Biệt Cây Cầu Nguyện, Hạnh Vận Thất Tức Trận + Hạnh Vận Giác Ngộ',
       		'content'	 =>'<p>Chư vị anh hùng thân mến</p>

<p>Chân Long 2016 xin gửi tới chư vị anh hùng sự kiện đặc biệt&nbsp;<span style="color:rgb(255, 0, 0)"><strong>Cây Cầu Nguyện, Hạnh Vận Thất Tức Trận + Hạnh Vận Giác Ngộ</strong></span></p>

<p><strong>1. Cây Cầu Nguyện</strong></p>

<p><span style="color:rgb(0, 128, 0)"><strong>Thời Gian</strong></span></p>

<p><span style="color:rgb(0, 128, 0)"><strong>Thời gian</strong></span>: từ 00:01&nbsp;đến 23:59 ngày 25/07</p>

<p><span style="color:rgb(0, 128, 0)"><strong>Nội Dung Sự Kiện</strong></span></p>

<p>Trong thời gian diễn ra sự kiện, tiêu phí Cầu Nguyện sẽ thu được rất nhiều vật phẩm giá trị:&nbsp;Đơn Dược, Hoàng Ngọc Bài, Cảnh GIới, Mảnh&nbsp;Đồng&nbsp;Đội v.v...</p>

<p style="text-align:center"><img src="http://img.gaba.vn/2016_07/6da0e9409fefc3d9caa4c134700bba2e.png" style="border:0px; box-sizing:border-box; height:257px; outline:none !important; vertical-align:middle; width:600px" /></p>

<p><span style="color:rgb(255, 0, 0)"><strong>2. Hạnh Vận Thất Tức Trận</strong></span></p>

<p><span style="color:rgb(0, 128, 0)"><strong>Thời gian</strong></span>: từ 00:01&nbsp;đến 23:59 ngày 25/07</p>

<p><span style="color:rgb(0, 128, 0)"><strong>Nội Dung Sự Kiện</strong></span></p>

<p>Trong thời gian sự kiện giảm giá Linh Châu 20%, mỗi lần chú linh nhận thêm thất tức hồn</p>

<p style="text-align:center"><img src="http://img.gaba.vn/2016_09/f2de405ee4b2b3edd6dd4b35ce9212c3.png" style="border:0px; box-sizing:border-box; height:313px; outline:none !important; vertical-align:middle; width:500px" /></p>

<p><span style="color:rgb(255, 0, 0)"><strong>3 . Hạnh Vận Giác Ngộ</strong></span></p>

<p><span style="color:rgb(0, 128, 0)"><strong>Thời gian</strong></span>: từ 00:01&nbsp;đến 23:59 ngày 25/07</p>

<p><span style="color:rgb(0, 128, 0)"><strong>Nội Dung:</strong></span>&nbsp;Trong thời gian diễn ra sự kiện có thể tiêu xu để nhận điểm và đổi sách giác ngộ</p>

<p style="text-align:center"><img src="http://img.gaba.vn/2016_11/be79d5410ddccc9d6a918346a6fcfd34.png" style="border:0px; box-sizing:border-box; height:297px; outline:none !important; vertical-align:middle; width:500px" /></p>

<p>Hy vọng chư vị anh hùng luôn có những giờ phút thư giãn thoải mái cùng Chân Long 2016</p>',
			'image'		=> 'CPuQS8nxYs-caycaunguyen.jpg',
			'title'		=> 'Sự Kiện - Nạp Xu Liên Tiếp Chọn Quà 21/07-25/07',
			'cate_id'	=> '3',
			'is_active'	=> '1'
       	]
       	);
    	}
    }
}
