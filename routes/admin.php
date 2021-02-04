<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

define('BAGINATE',5);

/**==================================Begin Student Login Routing==================================*/
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' ],function (){

    Route::get('/','AdminController@index')->name('index');
    Route::post('/admin','AdminController@login')->name('admin.login');
    Route::get('/logout','AdminController@logout')->name('admin.logout');

});
/**==================================End Student Login Routing==================================*/


/*==============================EBegin Student Routing=============================================*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::group(['prefix' => 'admin','namespace' =>'Admin','middleware' =>'prevent'], function () {
Route::get('/dashboard','AdminController@show')->name('dashboard');
Route::get('/student','StudentController@create_student')->name('create_student');
Route::post('/save_student','StudentController@store_student')->name('store.student');
Route::get('/all_student','StudentController@show_students')->name('all.student');
Route::get('/edit_student/{id}','StudentController@edit_students')->name('edit.student');
Route::post('/update_student/{id}','StudentController@update_students')->name('update.student');
Route::get('/delete_student/{id}','StudentController@delete_students')->name('delete.student');
// /*==============================End Student Routing=============================================*/

/**==============================Begin Courses Routing==================================== */
Route::get('/courses','CourseController@create_courses')->name('site.addcources');
Route::get('/view_courses','CourseController@view_courses')->name('site.courses');
Route::post('/save_courses','CourseController@store_courses')->name('store.courses');
Route::get('/delete_courses/{id}','CourseController@delete_courses')->name('delete.courses');

/*============================End Courses Routing=========================================*/

// =========================================Begin Student-> Course=====================================================
Route::get('/show_students_courses/{id}','CourseController@show_students_courses')->name('show.students.courses');
Route::post('/add-Courses-to-Students','CourseController@save_student_course')->name('save.student.course');
/*============================End Student-> Course=========================================*/

/**==============================Begin Department Routing===================================*/
 Route::get('/show_department','DepartmentController@show_department')->name('show.department');
Route::get('/add_department','DepartmentController@create_department')->name('create.department');
Route::post('/save_department','DepartmentController@store_department')->name('store.department');
Route::get('/edit_department/{id}','DepartmentController@edit_department')->name('edit.department');
Route::post('/update_department/{id}','DepartmentController@update_department')->name('update.department');
Route::get('/delete_department/{id}','DepartmentController@delete_department')->name('delete.department');
// /*====================================End Department Routing==================================*/

});
});

?>
