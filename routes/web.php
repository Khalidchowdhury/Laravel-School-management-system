<?php

use App\Http\Controllers\Setting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\featureController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Auth\ForgotPasswordController;


/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}


// Website view route
Route::get('/', [ mainController::class, 'showHomePage' ]) -> name('home.page');
Route::get('/about', [ mainController::class, 'showAboutPage' ]) -> name('about.page');
Route::get('/courses', [ mainController::class, 'showCoursesPage' ]) -> name('courses.page');
Route::get('/contact', [ mainController::class, 'showContactPage' ]) -> name('contact.page');



Route::get('/login', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();


// Login Route
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});


// Register Route
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});


// Dashboard Route
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->middleware('auth')->name('student/dashboard');
});

// User Controller Route 
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');
});



// Setting Route
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});


// Student Route
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
});


// Teacher Route
Route::controller(TeacherController::class)->group(function () {
    Route::get('teacher/add/page', 'teacherAdd')->middleware('auth')->name('teacher/add/page'); // page teacher
    Route::get('teacher/list/page', 'teacherList')->middleware('auth')->name('teacher/list/page'); // page teacher
    Route::get('teacher/grid/page', 'teacherGrid')->middleware('auth')->name('teacher/grid/page'); // page grid teacher
    Route::post('teacher/save', 'saveRecord')->middleware('auth')->name('teacher/save'); // save record
    Route::get('teacher/edit/{id}', 'editRecord'); // view teacher record
    Route::post('teacher/update', 'updateRecordTeacher')->middleware('auth')->name('teacher/update'); // update record
    Route::post('teacher/delete', 'teacherDelete')->name('teacher/delete'); // delete record teacher
});


// Department Route
Route::controller(DepartmentController::class)->group(function () {
    Route::get('department/add/page', 'indexDepartment')->middleware('auth')->name('department/add/page'); // page add department
    Route::get('department/edit/page', 'editDepartment')->middleware('auth')->name('department/edit/page'); // page add department
});




/**
 * 
 * Others Route Setup
 * 
 */

// Fees Route 
Route::controller(featureController::class)->group(function () {
    Route::get('fees', 'fees') -> name('fees.page');
    Route::get('edit-fees', 'editfees') -> name('edit.fees');
    Route::get('add-fees', 'addfees') -> name('add.fees');
    Route::Post('add-fees', 'createFess') -> name('create.fees');
    Route::get('view-fees/{id}', 'viewfees') -> name('view.fees');

    // Time Table Route
    Route::get('time-table', 'timeTable') -> name('time.page');
    Route::get('invoice', 'invoisePage') -> name('invoice.page');

    // salary Route
    Route::get('salary', 'salaryPage') -> name('salary.page');
    Route::get('add-salary', 'addSalary') -> name('addSalary.page');

    // Library Route
    Route::get('library', 'library') -> name('library.page');
    Route::get('add-library', 'showLibrary') -> name('showLibrary.page');
    Route::post('add-library', 'addLibrary') -> name('addLibrary.page');

    // Event Route
    Route::get('event', 'showEventPage') -> name('event.page');
    Route::get('view-event/{id}', 'viewEventPage') -> name('view.event.page');
    Route::get('add-event', 'addEventPage') -> name('add.event.page');
    Route::post('add-event', 'regEventPage') -> name('reg.event.page');
    Route::get('eventDestroy/{id}', 'deleteEventPage') -> name('delete.event.page');


    // holiday Route
    Route::get('holiday', 'Holiday') -> name('holiday.page');
});