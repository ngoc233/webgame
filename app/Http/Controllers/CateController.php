<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cate;
use App\Menu;
use Validator;
class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Cate::all();
        return view('admin.cates.index',['cates'=>$cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('admin.cates.create',['menus'=>$menus]);
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
                'link.max'          => 'Link không được quá 191 kí tự',
                'menu_id.required'  => 'Menu không được để trống'

            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191|unique:cates,name',
                    'link'          =>  'max:191',
                    'menu_id'       =>  'required',
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
            $data['alias'] = changeTitle($data['name']);
            Cate::create($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('cate.index'))->with('notification','created success fully');
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
        $menus = Menu::all();
        $cate =  Cate::find($id);
        return view('admin.cates.edit',['cate'=>$cate,'menus'=>$menus]);    
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
        unset($data['_token']);
        DB::beginTransaction();
        try
        {
            $message = 
            [
                'name.required'     => 'Tên không được để trống',
                'name.min'          => 'Tên không được lớn hơn 3 kí tự',
                'name.max'          => 'Tên không được quá 191 kí tự',
            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191',
                    'link'          =>  'max:191',
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
                $data['alias'] = changeTitle($data['name']);
                Cate::find($id)->update($data);
                DB::commit();
                Session()->flash('success', 'Update success fully');
                return redirect(route('cate.index'));
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
        Cate::find($id)->delete();
        Session()->flash('success', 'Deleted success fully');
        return redirect(route('cate.index'));
    }
}
