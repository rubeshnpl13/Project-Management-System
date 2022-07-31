<?php

namespace App\Models\Backend;

use App\Models\User;
use App\Models\backend\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogSheet extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='log_sheets';
    protected $fillable = ['project_id','meeting_date','topic','feedback','next_meeting_target','supervisor_approval_key','created_by','updated_by','student_id','language_tools_project_id'];
    protected $filltable = ['project_id','meeting_date','topic','feedback','next_meeting_target','supervisor_approval_key','created_by','updated_by','student_id','language_tools_project_id'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function projectId()
    {
        return $this->belongsTo(\App\Models\Backend\Project::class,'project_id','id');
    }
    function studentId()
    {
        return $this->belongsTo(\App\Models\Backend\Student::class,'student_id','id');
    }

    function languagetoolsprojectId()
    {
        return $this->hasOne(\App\Models\Backend\Language_Tools_Project::class,'language_tools_project_id','id');
    }
}
