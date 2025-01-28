<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   
    protected $fillable=['name','email','image','gender','track_id'];
    
    function track()
    {
        // return $this->belongsTo(Track::class,'track_id','myId');
        return $this->belongsTo(Track::class);
    }
}
