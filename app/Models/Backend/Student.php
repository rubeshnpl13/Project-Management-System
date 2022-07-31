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
    protected $filltable = ['name','email','password','semester','batch_id','created_by','user_id','updated_by'];
    
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
}
