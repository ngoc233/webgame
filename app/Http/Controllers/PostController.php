<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Menu;
use App\Post;
use App\Cate;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Cate::all();
        return view('admin.posts.create',['cates'=>$cates]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        DB::beginTransaction();
        try
        {
            $message = 
            [
                'name.required'     => 'Tên không được để trống',
                'name.min'          => 'Tên không được lớn hơn 3 kí tự',
                'name.max'          => 'Tên không được quá 191 kí tự',
                'name.unique'       => 'Tên đã tồn tại',
                'title.required'    => 'Title phải nhập',
                'title.min'         => 'Title không lên ít hơn 3 kí tự',
                'title.max'         => 'Title không lên quá 191 kí tự',
                'description.required' => 'Description  phải nhập',
                'description.min' => 'Description không lên ít hơn 3 kí tự',
                'content.required' => 'Content  phải nhập',
                'content.min' => 'Content không lên ít hơn 3 kí tự',

            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191|unique:posts,name',
                    'title'         =>  'required|min:3|max:191',
                    'description'   =>  'required|min:3',
                    'content'       =>  'required|min:3',
                    
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
            if($request->hasFile('image'))
            {
            $file = $request->file('image');
            $last_file = $file->getClientOriginalExtension();
            if($last_file != "jpg" && $last_file != "png" && $last_file !="jpeg"){
                return redirect("route('post/create')")->with('errors','file bạn thêm không phải là ảnh');
            }
            $file_name = $file->getClientOriginalName();
            $image = str_random(10)."-".$file_name;
            $file->move("public/admin/image_post",$image);
                $data['image'] = $image;
            }
            else
            {
                $data['image'] = "Null";
            } 
            $data['alias'] = changeTitle($data['name']);
            Post::create($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('post.index'))->with('notification','created success fully');
        }
        catch (Exception $e)
        {
            DB::rollback();
            response()->json([
                    'error' => true,
                    'message' => 'Internal Server Error'
                ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cates = Cate::all();
        $post = Post::find($id);
        return view('admin/posts/edit',['post' => $post,'cates'=>$cates]);
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
        $data = $request->all();
        $post = Post::find($id);
        unset($data['_token']);
        DB::beginTransaction();
        try
        {
            $message = 
            [
                'name.required'     => 'Tên không được để trống',
                'name.min'          => 'Tên không được lớn hơn 3 kí tự',
                'name.max'          => 'Tên không được quá 191 kí tự',
                'title.required'    => 'Title phải nhập',
                'title.min'         => 'Title không lên ít hơn 3 kí tự',
                'title.max'         => 'Title không lên quá 191 kí tự',
                'description.required' => 'Description  phải nhập',
                'description.min' => 'Description không lên ít hơn 3 kí tự',
                'content.required' => 'Content  phải nhập',
                'content.min' => 'Content không lên ít hơn 3 kí tự',

            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191',
                    'title'         =>  'required|min:3|max:191',
                    'description'   =>  'required|min:3',
                    'content'       =>  'required|min:3',
                    
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $last_file = $file->getClientOriginalExtension();
                if($last_file != "jpg" && $last_file != "png" && $last_file !="jpeg"){
                    return redirect("route('post/create')")->with('errors','file bạn thêm không phải là ảnh');
                }
                $file_name = $file->getClientOriginalName();
                $image = str_random(10)."-".$file_name;
                while (file_exists("public/admin/image_post/".$image)) 
                {
                    $image = str_random(10)."-".$file_name;
                }
                $file->move("public/admin/image_post",$image);
                $data['image'] = $image;    
                if($post->image != "Null")
                {
                    unlink("public/admin/image_post/".$post->image);
                }
                else
                {

                }
                
            }
            else
            {
                // do not something
            } 
            $data['alias'] = changeTitle($data['name']);
            $post->update($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('post.index'))->with('notification','created success fully');
        }
        catch (Exception $e)
        {
            DB::rollback();
            response()->json([
                    'error' => true,
                    'message' => 'Internal Server Error'
                ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post->image != "Null") {
            unlink("public/admin/image_post/".$post->image);
        }
        $post->delete();
        Session()->flash('success', 'Deleted success fully');
        return redirect(route('post.index'));
    }
}
