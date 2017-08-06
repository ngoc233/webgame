<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class SocialController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function handleProviderCallback()
    {
        // Sau khi xác thực Facebook chuyển hướng về đây cùng với một token
        // Các xử lý liên quan đến đăng nhập bằng mạng xã hội cũng đưa vào đây.
       $user = Socialite::driver('facebook')->user();
       $token = $user->token;
       echo "Tên là : ". $user->getName()."</br>";
       echo "Email là : ". $user->getEmail()."</br>";
       echo "Avata là : "."<img src='".$user->getAvatar()."'>" ."</br>";
    }
}
