<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Backend\Student;
use App\Models\Backend\project;


class StudentProject extends Model
{
    use HasFactory;
    protected $table='project_students';
    protected $fillable = ['project_id','student_id'];
    protected $filltable = ['project_id','language_tool_id'];
    function project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
    function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
