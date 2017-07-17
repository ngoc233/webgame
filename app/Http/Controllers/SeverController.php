<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Sever;
use Validator;

class SeverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $severs = Sever::all();
        return view('admin.severs.index',['severs'=>$severs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.severs.create');
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
                'title.required'     => 'Tên không được để trống',
                'title.min'          => 'Tên không được lớn hơn 3 kí tự',
                'title.max'          => 'Tên không được quá 50 kí tự',

            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191|unique:menus',
                    'title'         =>  'required|min:3|max:50',
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
            Sever::create($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('sever.index'))->with('notification','created success fully');
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
        $sever = Sever::find($id);
        return view('admin.severs.edit',['sever'=>$sever]);
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
                'title.required'     => 'Tên không được để trống',
                'title.min'          => 'Tên không được lớn hơn 3 kí tự',
                'title.max'          => 'Tên không được quá 50 kí tự',

            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191',
                    'title'         =>  'required|min:3|max:50',
                ],$message);
            if ($validator->fails())
            {
                return redirect()->back()->withInput($data)->withErrors($validator);
            }
                    Sever::find($id)->update($data);
                    DB::commit();
                    Session()->flash('success', 'Update success fully');
                    return redirect(route('sever.index'));
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
        Sever::find($id)->delete();
        Session()->flash('success', 'Delete success fully');
        return redirect(route('sever.index'));
    }
}
