<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\User;

class Program extends Model
{

    use HasFactory;
    use softDeletes;
    protected $table='programs';
    protected $fillable = ['title','no_of_semester','status','created_by','updated_by'];
    protected $filltable = ['title','no_of_semester','status','created_by','updated_by'];
    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }

}
