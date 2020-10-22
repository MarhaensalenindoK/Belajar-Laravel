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
// root

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama='Marhaensalenindo Komara';
//     return view('about', ['nama'=>$nama]);
// });

//  Kontroler Pages
use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'home']);
Route::get('/about',[PagesController::class,'about']);
//  Kontroller Siswa 
use App\Http\Controllers\SiswaController;
Route::get('/siswa',[SiswaController::class,'index']);
// Students
use App\Http\Controllers\StudentsController;
// Route::get('/students',[StudentsController::class,'index']);
// // Students method Show in StudentsController
// Route::get('/students/create',[StudentsController::class,'create']);
// Route::get('/students/{student}',[StudentsController::class,'show']);
// Route::post('/students',[StudentsController::class,'store']);
// Route::delete('/students/{student}',[StudentsController::class,'destroy']);
// Route::get('/students/{student}/edit',[StudentsController::class,'edit']);
// Route::patch('/students/{student}',[StudentsController::class,'update']);
Route::resource('students',StudentsController::class);