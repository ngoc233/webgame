<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\About;
use App\Post;
use App\Menu;
use App\Slider;
use App\Sever;
use DB;
use Route;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $menus = Menu::all();
        $severs = Sever::orderBy('id','desc')->paginate(15);
        $newServer = Sever::orderBy('id','desc')->paginate(15)->first();
        $sliders = Slider::orderBy('id','desc')->get();
        $newSlider = Slider::orderBy('id','desc')->first();
        $cates = Cate::all();
        $posts = Post::orderBy('id','desc')->paginate(5);
        $arrays = array('menus' => $menus,'servers' =>$severs,'newServer'=>$newServer,'sliders'=>$sliders,'newSlider'=>$newSlider,'posts'=>$posts,'cates'=>$cates);
        view()->share('arrays',$arrays);
    }
    public function index()
    {
        $posts = DB::table('posts')->orderBy('id','desc')->take(5)->get();   
        return view('user.home',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function content($id)
    {
        if (isset($_GET['p']))
        {
            $posts = DB::table('posts')->where('cate_id','=',$id)->orderBy('id','desc')->paginate(5,['*'],'p',$page=null);
        return view('user.content_pagination',['posts'=>$posts,'id'=>$id]);
        }
        else
        {
        $posts = DB::table('posts')->where('cate_id','=',$id)->orderBy('id','desc')->paginate(5,['*'],'p',$page=null);
        return view('user.content',['posts'=>$posts,'id'=>$id]);
        }
    }
    public function post($id)
    {
        $post = Post::find($id);
        return view('user.post',['post'=>$post]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
