<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Batch;
use App\Models\Backend\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='students';
    protected $fillable = ['name','email','password','semester','batch_id','program_id','user_id','created_by','updated_by'];
    protected $filltable = ['name','email','password','semester','batch_id','program_id','created_by','user_id','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function batch()
    {
        return $this->belongsTo(Batch::class,'batch_id','id');
    }
    function program()
    {
        return $this->belongsTo(Program::class,'program_id','id');
    }

    function projectId()
    {
        return $this->belongsTo(\App\Models\Backend\Project::class);
    }
    function logsheet()
    {
        return $this->hasMany(\App\Models\Backend\LogSheet::class);
    }

    function studentId()
    {
        return $this->belongsTo(\App\Models\Backend\Student::class,'student_id','id');
    }
}

