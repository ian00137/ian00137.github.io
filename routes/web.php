<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\SosmedController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
Route::get('/', [home::class, 'index'])->name('home');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'cekLogin']);

Route::get('/profil',[ProfilController::class,'index'])->middleware('auth')->name('profil');
Route::post('/profil',[ProfilController::class,'updateData'])->middleware('auth');


// PROJECT
Route::get('/project',[ProjectController::class,'index'])->middleware('auth')->name('project');
Route::get('/project/tambah',[ProjectController::class,'tambah'])->middleware('auth');
Route::post('/project/tambah',[ProjectController::class,'tambahProses'])->middleware('auth');
Route::get('/project/{id}',[ProjectController::class,'edit'])->middleware('auth');
Route::post('/project/{id}',[ProjectController::class,'editProses'])->middleware('auth');
Route::get('/project/delete/{id}',[ProjectController::class,'editDelete'])->middleware('auth');



// SKILLS
Route::get('/skill',[SkillController::class, 'index'])->middleware('auth')->name('skill');
Route::get('/skill/tambah',[SkillController::class, 'skillTambah'])->middleware('auth');
Route::post('/skill/tambah',[SkillController::class, 'skillTambahProses'])->middleware('auth');
Route::get('/skill/{id}',[SkillController::class, 'skillEdit'])->middleware('auth');
Route::post('/skill/{id}',[SkillController::class, 'skillEditProses'])->middleware('auth');
Route::get('/skill/delete/{id}',[SkillController::class, 'skillDelete'])->middleware('auth');


// KNOWLEDGE
Route::post('/knowledge',[KnowledgeController::class, 'knowledgeTambah'])->middleware('auth');
Route::get('/knowledge/{id}',[KnowledgeController::class, 'knowledgeEdit'])->middleware('auth');
Route::post('/knowledge/{id}',[KnowledgeController::class, 'knowledgeEditProses'])->middleware('auth');
Route::get('/knowledge/delete/{id}',[KnowledgeController::class, 'knowledgeDelete'])->middleware('auth');


// SOSMED
Route::get('/social',[SosmedController::class, 'index'])->middleware('auth')->name('sosmed');
Route::post('/social',[SosmedController::class, 'update'])->middleware('auth');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect()->route('login');
});
