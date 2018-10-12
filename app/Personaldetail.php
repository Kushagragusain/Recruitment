<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaldetail extends Model
{
    
    
    protected $fillable = [
        'candidate_name', 'DOB', 'gender','father_name','post_applied','department','category','marital_status','Permanent_address','user_id',
    ];
    protected $dates = [
        'DOB',
    ];

 }
