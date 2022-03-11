<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gradeController;
use App\Http\Controllers\fineController;
use App\Http\Controllers\libController;
use App\Http\Controllers\notificationController;



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

Route::get('/registration',[RegController::class,'reg'])->name('registration');
Route::get('/login',[RegController::class,'login'])->name('login');
Route::get('/logout',[RegController::class,'logout'])->name('logout');

Route::post('/registration',[RegController::class,'regsubmit'])->name('regsubmit');
Route::post('/login',[RegController::class,'logsubmit'])->name('logsubmit');
Route::get('/forgotpassword',[RegController::class,'forgot_password'])->name('forgot_password');
Route::post('/forgotpassword',[RegController::class,'forgot_pass'])->name('forgot_pass');




Route::get('/profile/profile',[RegController::class,'profile'])->name('profile');
Route::get('/profile/edit',[RegController::class,'edit'])->name('edit');

Route::post('/profile/edit',[RegController::class,'editsub'])->name('editsub');


Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

Route::get('/course/course',[HomeController::class,'course'])->name('course');
Route::post('/course/showcourse',[HomeController::class,'showcourse'])->name('showcourse');
Route::post('/course/coursesub',[HomeController::class,'coursesub'])->name('coursesub');

Route::get('/gradereport/grade',[HomeController::class,'grade'])->name('grade');




Route::get('/financ',[HomeController::class,'finance'])->name('finance');

Route::get('/reg',[HomeController::class,'reg'])->name('reg');

Route::post('/regsub',[HomeController::class,'regsub'])->name('regsub');

Route::get('/gradereport/pdfdownload',[HomeController::class,'pdfdownload'])->name('pdfdownload');

Route::get('/course/list',[gradeController::class,'list'])->name('list');



Route::get('/course/details/{id}',[gradeController::class,'details'])->name('details');




Route::get('/acalender',[HomeController::class,'acalender'])->name('acalender');


Route::get('/libs/lib',[libController::class,'library'])->name('library');
Route::get('/libs/lib_fi',[libController::class,'lib_fi'])->name('lib_fi');




Route::get('/notification/dept',[notificationController::class,'departments'])->name('departments');
Route::get('/notification/course/{cid}',[notificationController::class,'courses'])->name('courses');




