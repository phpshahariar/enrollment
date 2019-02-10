<?php

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
/*All Admin Controller info here*/


Route::get('/admin/dashboard', 'AdminController@admin_dashboard');
Route::get('/add-department', 'AdminController@addDepartmant');
Route::post('/department-info', 'AdminController@saveDepartmantInfo');
Route::get('/manage-department', 'AdminController@manageDepartmentInfo');
Route::get('/edit-department/{id}', 'AdminController@editDepartmentInfo');
Route::post('/department-update', 'AdminController@updateDepartmentInfo');
Route::get('/department-update/{id}', 'AdminController@deleteDepartmentInfo');

Route::get('/add-teacher', 'AdminController@addTeacher');
Route::post('/new-teacher', 'AdminController@saveTeacherInfo');
Route::get('/manage-teacher', 'AdminController@manageTeacherInfo');
Route::get('/edit-teacher/{id}', 'AdminController@editTeacherInfo');
Route::post('/update-teacher', 'AdminController@updateTeacherInfo');
Route::get('/delete-teacher/{id}', 'AdminController@deleteTeacherInfo');

Route::get('/add-student', 'AdminController@addStudent');
Route::post('/new-student', 'AdminController@saveStudentInfo');
Route::get('/manage-student', 'AdminController@manageStudentInfo');
Route::get('/edit-teacher/{id}', 'AdminController@editStudentInfo');
Route::post('/update-student', 'AdminController@updateStudentInfo');
Route::get('/delete-teacher/{id}', 'AdminController@deleteStudentInfo');



/*end Admin Controller info here*/

Route::get('/department/dashboard', 'DepartmentController@index');
Route::get('/add-department-teacher', 'DepartmentController@addTeacher');
Route::post('/department-new-teacher', 'DepartmentController@saveDepartmentTeacher');
Route::get('/manage-department-teacher', 'DepartmentController@manageDepartmentTeacher');
Route::get('/edit-department-teacher/{id}', 'DepartmentController@editDepartmentTeacher');
Route::post('/department-update-teacher', 'DepartmentController@updateDepartmentTeacher');
Route::get('/view-department-teacher/{id}', 'DepartmentController@viewDepartmentTeacher');


Route::get('/add-department-student', 'DepartmentController@addDepartmentStudent');
Route::post('/department-new-student', 'DepartmentController@saveDepartmentStudent');
Route::get('/manage-department-student', 'DepartmentController@manageDepartmentStudent');
Route::get('/edit-department-student/{id}', 'DepartmentController@editDepartmentStudent');
Route::post('/department-update-student', 'DepartmentController@updateDepartmentStudent');
Route::get('/view-department-student/{id}', 'DepartmentController@viewDepartmentStudent');

Route::get('/student/dashboard', 'StudentController@student_dashboard');
Route::get('/teacher/dashboard', 'TeacherController@TeacherDashboard');

Auth::routes();

Route::get('/', 'HomeController@index');
