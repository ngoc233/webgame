<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use DB;
use Validator;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
                'name.min'          => 'Tên không được ít hơn 3 kí tự',
                'name.max'          => 'Tên không được quá 191 kí tự',
                'image.required'     => 'Ảnh không được để trống',
            ];        
            $validator = Validator::make($data,
                [
                    'name'          =>  'required|min:3|max:191',
                    'image'         =>   'required'
                    
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
                return redirect("route('slider/create')")->with('errors','file bạn thêm không phải là ảnh');
            }
            $file_name = $file->getClientOriginalName();
            $image = str_random(10)."-".$file_name;
            $file->move("public/admin/image_sliders",$image);
                $data['image'] = $image;
            }
            else
            {
                $data['image'] = "Null";
            } 
            $data['alias'] = changeTitle($data['name']);
            Slider::create($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('slider.index'))->with('notification','created success fully');
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
        $slider = Slider::find($id);
        return view('admin.sliders.edit',['slider'=>$slider]);
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
        $slider = Slider::find($id);
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
                    return redirect("route('slider/create')")->with('errors','file bạn thêm không phải là ảnh');
                }
                $file_name = $file->getClientOriginalName();
                $image = str_random(10)."-".$file_name;
                while (file_exists("public/admin/image_sliders/".$image)) 
                {
                    $image = str_random(10)."-".$file_name;
                }
                $file->move("public/admin/image_sliders",$image);
                $data['image'] = $image;    
                if($slider->image != "Null")
                {
                    unlink("public/admin/image_sliders/".$slider->image);
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
            $slider->update($data);
            DB::commit();
            Session()->flash('success', 'Created success fully');
            return redirect(route('slider.index'))->with('notification','created success fully');
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
        Slider::find($id)->delete();
        Session()->flash('success','Deleted success fully');
        return redirect(route('slider.index'));
    }
}
