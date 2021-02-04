<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $fillable=['name','prof_name','year','details','photo','created_at','updated_at'];
    protected $hidden =['create_at','updated_at'];


    //$Course->students
    public function students()
    {
        return $this->belongsToMany('App\Models\Student',
        'students_courses','course_id','student_id','id','id');
    }
}
