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

// Route::get('/', function () {
//     return view('frontend.master');
// });



/**==================================Begin Student_Courses Routing==================================*/

Route::group([ 'namespace' => 'Front','middleware' =>'preventLogin' ],function (){
    Route::get('/student_courses','SiteController@student_courses')->name('student.courses');
});
/**==================================End  Student_Courses Routing==================================*/

/**==================================Begin  login_student And logout Routing==================================*/
Route::group(['namespace' =>'Front'], function () {
    Route::get('/Login-student','SiteController@login_student')->name('login.student');
    Route::post('/Login-student','SiteController@login_student_submit')->name('login.student.submit');
    Route::get('/logout-student','SiteController@logout_student')->name('logout.student');
/**==================================End  login_student And logout Routing==================================*/

  /**==================================Begin  Frontend Pages Routing==================================*/
    Route::get('/', 'SiteController@index')->name('site.home');
    Route::get('/about','SiteController@about')->name('site.about');
    Route::get('/contact','SiteController@contact')->name('site.contact');
    Route::post('/store-contact','SiteController@save_contact')->name('save.contact');
});
/**==================================End  Frontend Pages Routing==================================*/
