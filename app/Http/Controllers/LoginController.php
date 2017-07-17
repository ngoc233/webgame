<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Validator;
use App\User;
class LoginController extends Controller
{
    public function getLogin()
    {
        if (Auth::check())
        {
            return redirect(route('cate.index'));
        }
        else
        {
            return view('admin.login');
        }
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['name' => $request->name ,'password'=>$request->password]))
        {
            return redirect(route('menu.index'));
        	
        }
        else
        {
			Session()->flash('success', 'Created success fully');
            return redirect(url('admin/login'))->with('err','Login fails');
        }
    }
    public function logout()
    {
    	Auth::logout();
    	return view('admin/login');
    }
 }
