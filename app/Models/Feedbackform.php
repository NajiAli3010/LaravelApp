<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbackform extends Model
{
    use HasFactory;

    protected $table = 'feedbackforms';
    // 

    protected $fillable = ['user_id','Subject','Feedback','File'];



    public function user(){
        
        return $this->belongsTo(User::class,'user_id','id');
    }
}


