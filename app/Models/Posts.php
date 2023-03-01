<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class posts extends Model
{
    use HasFactory;
    protected $guarded = [];
   // public $timestamps = false;

    function user(){

        return $this->belongsTo(User::Class); 
    }
}
