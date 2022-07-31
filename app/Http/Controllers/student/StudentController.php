<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\LogSheet;
use App\Models\Backend\Project;
use App\Models\Backend\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends BackendBaseController
{
    protected $base_route = 'student.home.';
    protected $base_view = 'student.';
    protected $module = 'Student';
    public function __construct()
    {
       $this->model= new Student();
    }
//    public function index($id)
//    {
//        $data_id = $id;
//        $data['record'] = $this->model::find($id)->get();
//        $data['student'] = $this->model::all();
////        $data['log'] = LogSheet::all();
//        $data['log'] = LogSheet::where('student_id', $id)->first();
//        return view($this->__loadDataToView($this->base_view.'home'),compact('data','data_id'));
//    }


    public function index($id)
    {
        $data['record'] = $this->model::find($id);
//        $data['log'] = LogSheet::where('student_id', $id)->first();
//       // $data['log'] = LogSheet::all();
//        return view($this->__loadDataToView($this->base_view.'home'),compact('data','id'));

        $users = DB::table('log_sheets')->where('student_id', $id)->select('id','project_id','student_id','topic','feedback','supervisor_approval_key','language_tools_project_id')->get();
        return view($this->__loadDataToView($this->base_view.'home'),compact('users','data'));

    }

    public function create()
    {
        $data['log'] = LogSheet::all();
        $data['project']= Project::pluck('title','id');
        $data['record'] = $this->model::all();
        return view($this->__loadDataToView($this->base_view .'create') ,compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate(array(
            'meeting_date' => 'required',
            'topic'=>'required',
            'next_meeting_target'=>'required'
        ));
        try{
            $record=$this->model::create($request->all());
            if($record)
            {
                request()->session()->flash('success',($this->__loadDataToView($this->module))."Created");
            }else{
                request()->session()->flash('error',($this->__loadDataToView($this->module))."Creation Failed ");
            }
        }
        catch(\Exception $exception){
            request()->session()->flash('error',"Error:".$exception->getMessage());

        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }

}
