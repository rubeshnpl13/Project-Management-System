<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\User;

class Organization extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='organizations';
    protected $fillable = ['name','address','website','email','phone','contact_person_name','contact_person_email','contact_person_phone','logo','created_by','updated_by'];
    protected $filltable = ['name','address','website','email','phone','contact_person_name','contact_person_email','contact_person_phone','logo','created_by','updated_by'];
    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}
