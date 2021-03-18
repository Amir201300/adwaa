<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About_us;
use Yajra\DataTables\DataTables;
use Auth, File;
use Illuminate\Support\Facades\Storage;


class About_usController extends Controller
{
    use \App\Traits\ApiResponseTrait;

    /**
     * @param Request $request
     * @return mixed
     * @throws \Exception
     */
    public function allData(Request $request)
    {
        $data = About_us::get();
        return $this->mainFunction($data);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('Admin.About_us.index');
    }


    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $About_us = About_us::find($id);
        return $About_us;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $About_us = About_us::find($request->id);
        $this->save_info($request,$About_us);
        return $this->apiResponseMessage(1,'تم التعديل بنجاح',200);
    }

    /**
     * @param $request
     * @param $About_us
     */
    public function save_info($request,$About_us){
        $About_us->title=$request->title;
        if($request->image) {
            deleteFile('About_us',$About_us->image);
            $About_us->image=saveImage('About_us',$request->image);
        }
        $About_us->about_us=$request->about_us;
        $About_us->our_phone=$request->our_phone;
        $About_us->our_email=$request->our_email;
        $About_us->our_vision=$request->our_vision;
        $About_us->our_massage=$request->our_massage;
        $About_us->our_goals=$request->our_goals;
        if($request->lat)
            $About_us->lat=$request->lat;
        if($request->lng)
            $About_us->lng=$request->lng;
        $About_us->save();
    }


    /**
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    private function mainFunction($data)
    {
        return Datatables::of($data)->addColumn('action', function ($data) {
            $options = '<td class="sorting_1"><button  class="btn btn-info waves-effect btn-circle waves-light" onclick="editFunction(' . $data->id . ')" type="button" ><i class="fa fa-spinner fa-spin" id="loadEdit_' . $data->id . '" style="display:none"></i><i class="sl-icon-wrench"></i></button>';
            return $options;
        })->addColumn('checkBox', function ($data) {
            $checkBox = '<td class="sorting_1">' .
                '<div class="custom-control custom-checkbox">' .
                '<input type="checkbox" class="mybox" id="checkBox_' . $data->id . '" onclick="check(' . $data->id . ')">' .
                '</div></td>';
            return $checkBox;
        })->editColumn('image', function ($data) {
            $image = '<a href="'. getImageUrl('About_us',$data->image).'" target="_blank">'
                .'<img  src="'. getImageUrl('About_us',$data->image) . '" width="50px" height="50px"></a>';
            return $image;
        })->rawColumns(['action' => 'action','checkBox'=>'checkBox','image'=>'image'])->make(true);
    }
}
