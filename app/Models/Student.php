<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';
    protected $fillable=['name','phone','email','photo','department_id','password','created_at','updated_at'];
    protected $hidden =['create_at','updated_at'];


    public function student()
    {
        return $this->belongsTo('App\Models\Department', 'department_id'.'id');
    }

    //$students->courses
    public function courses()
    {
        return $this->belongsToMany('App\Models\Course',
        'students_courses' ,'student_id', 'course_id','id','id');
    }
}
