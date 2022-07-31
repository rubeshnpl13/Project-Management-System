<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Backend\Program;
use App\Models\Backend\Batch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function register()
    {
        $data['program']= Program::pluck('title','id');
        $data['batch']= Batch::pluck('year','id');
        return view(('frontend.register') ,compact('data'));
    }
    public function doregister()
    {
        return view(('frontend.register'));
    }
}
