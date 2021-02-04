<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table='departments';
    protected $fillable=['name','phone','email','created_at','updated_at'];
    protected $hidden =['create_at','updated_at'];


    public function department()
    {
       return $this->hasMany('App\Models\Student');
    }

}
