<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\HomeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template');
});

Route::get('login', function () {
    return view('login');
});
Route::get('loginalumni', function () {
    return view('loginalumni');
});
Route::get('register', function () {
    return view('register');
});

Route::get('admin', function () {
    return view('admin');
});
Route::get('tampilan', function () {
    return view('tampilan');
});

Route::get('sidebar', function () {
    return view('sidebar');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('bar', function () {
    return view('bar');
});
Route::get('dashboardadmin', function () {
    return view('dashboardadmin');
});
Route::get('nypba', function () {
    return view('nypba');
});

Route::get('nyoba', function () {
    return view('nyoba');
});

Route::get('datatable', function () {
    return view('datatable');
});
Route::get('bio', function () {
    return view('bio');
});
Route::get('landing', function () {
    return view('landing');
});
Route::get('formdatapostingan', function () {
    return view('formdatapostingan');
});
//user
Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);
// Route::post('user/auth',[UserController::class,'auth']);

Route::get('dashboardadmin',[UserController::class,'show']);


//alumni
Route::post('auth',[AlumniController::class,'auth']);
Route::get('register',[AlumniController::class,'register']);
Route::post('register/daftar',[AlumniController::class,'daftar']);
Route::get('logoutalumni',[AlumniController::class,'logout']);
Route::get('dataalumni',[AlumniController::class,'alumni']);
Route::get('profil',[AlumniController::class,'profil']);




//postingan
Route::get('postingan',[PostinganController::class,'show']);
Route::get('postingan/add',[PostinganController::class,'add']);
Route::post('postingan/create',[PostinganController::class,'create']);
Route::get('postingan/delete/{id_postingan}',[PostinganController::class,'delete']);
Route::get('postingan/edit/{id_postingan}',[PostinganController::class,'edit']);
Route::post('postingan/update/{id_postingan}',[PostinganController::class,'update']);
Route::get('datapostingan',[PostinganController::class,'tampil']);



//pengajuan
Route::get('pengajuan',[PengajuanController::class,'show']);
Route::get('pengajuan/add',[PengajuanController::class,'add']);
Route::post('pengajuan/create',[PengajuanController::class,'create']);
Route::get('pengajuan/delete/{id_pengajuan}',[PengajuanController::class,'delete']);
Route::get('pengajuan/edit/{id_pengajuan}',[PengajuanController::class,'edit']);
Route::post('pengajuan/update/{id_pengajuan}',[PengajuanController::class,'update']);
Route::get('pengajuan',[PengajuanController::class,'tampil']);


//perusahaan
Route::get('perusahaan',[PerusahaanController::class,'show']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
Route::get('perusahaan/delete/{id_perusahaan}',[PerusahaanController::class,'delete']);
Route::get('perusahaan/edit/{id_perusahaan}',[PerusahaanController::class,'edit']);
Route::post('perusahaan/update/{id_perusahaan}',[PerusahaanController::class,'update']);




//testimoni
Route::get('testimoni',[TestimoniController::class,'show']);
Route::get('testimoni/add',[TestimoniController::class,'add']);
Route::post('testimoni/create',[TestimoniController::class,'create']);
Route::get('testimoni/delete/{id}',[TestimoniController::class,'delete']);
Route::get('testimoni/edit/{id}',[TestimoniController::class,'edit']);
Route::post('testimoni/update/{id}',[TestimoniController::class,'update']);

Route::get('/',[HomeController::class,'show']);
Route::get('postinganalumni/edit/{id_postingan}',[HomeController::class,'edit']);
Route::post('postinganalumni/update/{id_postingan}',[HomeController::class,'update']);
Route::get('detail',[HomeController::class,'tampil']);


Route::middleware('alumni')->group(function(){
});
