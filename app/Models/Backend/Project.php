<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\User;
use App\Models\Backend\Batch;
use App\Models\Backend\Supervisor;
use App\Models\Backend\Organization;
class Project extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='projects';
    protected $fillable = ['batch_id','title','supervisor_id','organization_id','created_by','updated_by'];
    protected $filltable = ['batch_id','title','supervisor_id','organization_id','created_by','updated_by'];
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
    function supervisor()
    {
        return $this->belongsTo(Supervisor::class,'supervisor_id','id');
    }
    function organization()
    {
        return $this->belongsTo(Organization::class,'organization_id','id');
    }
}
