<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseEvaluationCriteria extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='course_evaluation_criteria';
    protected $fillable = ['course_id','evaluation_criteria_id','created_by','updated_by'];
    protected $filltable = ['course_id','evaluation_criteria_id','created_by','updated_by'];
    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }

    function courseID()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }
    function evaluationCriteriaID()
    {
        return $this->belongsTo(EvaluationCriteria::class,'evaluation_criteria_id','id');
    }
}
