<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Backend\Course;
use App\Models\Backend\Batch;

class BatchCourse extends Model
{
    use HasFactory;
    protected $table='batch_courses';
    protected $fillable = ['batch_id','course_id'];
    protected $filltable = ['batch_id','course_id'];

    function batch()
    {
        return $this->belongsTo(Batch::class,'batch_id','id');

    }
    function courses()
    {
        return $this->belongsToMany(Course::class,'course_id','id');
    }
}
