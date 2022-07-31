<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Student;
use App\Models\User;
use App\Models\Backend\Program;
use App\Models\Backend\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class StudentController extends FrontendBaseController
{
    protected $base_route = 'frontend.student.';
    protected $base_view = 'frontend.student.';
    protected $module = 'Student';
    public function __construct()
    {
        $this->model= new Student();
    }
    function registerForm()
    {
        $data['program']= Program::pluck('title','id');
        $data['batch']= Batch::pluck('year','id');
        return view($this->__loadDataToView($this->base_view.'register'),compact('data'));
    }
    function register(Request $request)
    {
        DB::beginTransaction();
        try{
            $user=User::create([
                'role_id'=> 1,
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                
                

            ]);
            if($user)
            {
            $request->request->add(['created_by'=>auth()->user()->id]);
            $request->request->add(['user_id'=>$user->id]);
            $student=Student::create($request->all());
            if($student)
            {
                DB::commit();
                request()->session()->flash('success',"Registeres Sucessfully");
                return redirect()->route($this->__loadDataToView($this->base_view.'register'));     
            }
            else{
                DB::rollback();
            }
            }
        }catch(Exception $exception)
        {
            DB::rollback();
            request()->session()->flash('error',"Error".$exception->getMessage());
            return redirect()->route($this->__loadDataToView($this->base_view.'register'));
        }
        
    }
}
