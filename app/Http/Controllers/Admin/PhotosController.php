<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Photos;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PhotosController extends CommonController
{
    //获取所有的图片
    public function index()
    {
        // 显示已经上传的图
        $data = Photos::orderBy('media_order','asc')->get();
        return view('admin.media.index',compact('data'));
    }

    public function create()
    {
        
        return view('admin/media/add');
    }
    public function store()
    {
        // dd($_POST);

    }

}
