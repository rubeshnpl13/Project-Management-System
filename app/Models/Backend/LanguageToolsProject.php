<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageToolsProject extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='language_tools_project';
    protected $fillable = ['language'];
    protected $filltable = ['language'];
}
