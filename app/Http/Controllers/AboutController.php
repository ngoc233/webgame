<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\About;
use DB;
use Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find('1');
        return view('admin.about.index',['about'=>$about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
                'content.required'  => 'Content không được để trống',
                'content.min'       => 'Content phải lớn hơn 3 kí tự',
                'content.max'       => 'Content phải nhỏ hơn 191 kí tự'

            ];        
            $validator = Validator::make($data,
                [
                    'content'   => 'required|min:3|max:191'
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
            if($request->hasFile('logo'))
            {
            $file = $request->file('logo');
            $last_file = $file->getClientOriginalExtension();
            if($last_file != "jpg" && $last_file != "png" && $last_file !="jpeg"){
                return redirect("route('post/create')")->with('errors','file bạn thêm không phải là ảnh');
            }
            $file_name = $file->getClientOriginalName();
            $logo = str_random(10)."-".$file_name;
            $file->move("public/admin/logo_logo",$logo);
                $data['logo'] = $logo;
            }
            else
            {
                $data['logo'] = "Null";
            } 
            About::create($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('about.index'))->with('notification','created success fully');
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
