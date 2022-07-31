<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use HasFactory;
    
    protected $table='evaluations';
    protected $fillable = ['evaluation_criteria_id','project_id','marks','created_by','updated_by'];
    protected $filltable = ['evaluation_criteria_id','project_id','marks','created_by','updated_by'];
    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }

    function projectID()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
    function evaluationCriteriaId()
    {
        return $this->belongsTo(EvaluationCriteria::class,'evaluation_criteria_id','id');
    }
}
