<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\BackendBaseController;
use App\Models\Backend\BatchCourse;
use App\Models\Backend\Batch;
use App\Models\Backend\Course;
use Illuminate\Http\Request;

class BatchCoursesController extends BackendBaseController
{
    protected $base_route = 'backend.batch_course.';
    protected $base_view = 'backend.batch_course.';
    protected $module = 'BatchCourse';
    public function __construct()
    {
       $this->model= new BatchCourse();
    }
    public function index()
    {
        $data['records'] = $this->model::all();
        return view($this->__loadDataToView($this->base_view.'index'), compact('data'));
    }
    public function create()
    {
        $data['batches']= Batch::pluck('year','id');
        $data['courses']= Course::pluck('name', 'id');
        return view($this->__loadDataToView($this->base_view .'create') ,compact('data'));
    }
    public function store(Request $request)
    {
        try{
            
            $record = $this->model->create($request->all());
            if ($record){
                if (count($request->course_id) > 0){
                    //add data into product course
                    $record->courses()->attach($request->course_id);
                }
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


    public function show($id)
    {
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        return view($this->__loadDataToView($this->base_view.'show'),compact('data'));
    }
    public function edit($id)
    {
        $data['programs']= Program::where('status', '1')->pluck('title','id');
        $data['record'] = $this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        return view($this->__loadDataToView($this->base_view.'edit '),compact('data'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $this->model->find($id);
            request()->request->add(['updated_by'=>auth()->user()->id]);
            if(!$data)
            {
                request()->session()->flash('error','Error: Invalid Request');
                return redirect()->route($this->__loadDataToView($this->base_route.'index'));
            }
            if ($data->update($request->all())){
                $request->session()->flash('success','Updated Successfully!!');
            }else{
                $request->session()->flash('error','Update Failed!!');
            }
        }catch(\Exception $exception){
            $request->session()->flash('error','Error: ' . $exception->getMessage());
        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }

    public function destroy($id)
    {
        $data['record']=$this->model::find($id);
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        if($data["record"]->delete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");

        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
    public function trash()
    {
        $data['records'] = $this->model::onlyTrashed()->get();
        return view($this->__loadDataToView($this->base_view.'trash'), compact('data'));
    }
    public function restore(Request $request, $id)
    {
        try{
            $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
            if(!$data['record'])
            {
                request()->session()->flash('error',"Error:Invalid Request");
                return redirect()->route($this->__loadDataToView($this->base_route."index"));
            }
            if($data['record'])
            {
                $data['record']->restore();
                request()->session()->flash('success',"Restored Successfully");

            }
            else
            {
                request()->session()->flash('error',"Updation Failed");
            }
        }
        catch(Exception $exception)
        {
            request()->session()->flash('error',"Error:".$exception->getMessage());
        }
        return redirect()->route($this->__loadDataToView($this->base_route."index"));
    }
    public function permanentDelete($id)
    {
        $data['record']=$this->model::onlyTrashed()->where('id',$id)->first();
        if(!$data['record' ]){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route($this->__loadDataToView($this->base_route.'index'));
        }
        if($data["record"]->forceDelete())
        {
            request()->session()->flash('success',"Successfully Deleted");

        }else{
            request()->session()->flash('error',"Error:Delete Failed ");
        }
        return redirect()->route($this->__loadDataToView($this->base_route.'index'));
    }
}
