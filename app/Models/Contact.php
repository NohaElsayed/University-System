<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contacts';
    protected $fillable=['name','email','message','phone','created_at','updated_at'];
    protected $hidden =['create_at','updated_at'];


}
