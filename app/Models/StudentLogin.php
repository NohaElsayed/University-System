<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentLogin extends Model
{
    protected $table='lstudents';
    protected $fillable=['name','phone','email','password','created_at','updated_at'];
    protected $hidden =['create_at','updated_at'];
}
