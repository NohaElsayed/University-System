<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admins';
    protected $fillable=['username','password','email','role','created_at','updated_at'];
    protected $hidden =['create_at','updated_at','pivol'];


}
