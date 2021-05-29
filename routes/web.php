<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/portfolio', [GuestController::class, 'portfolio'])->name('portfolio.all');
Route::get('/portfolio/detail/{id}', [GuestController::class, 'portfolio_view'])->name('portfolio.view');

Route::get('/admin_side', [AdminController::class, 'index'])->name('admin');

Route::get('/admin_side/project/add', [ProjectController::class, 'create'])->name('project.add');
Route::post('/projgo', [ProjectController::class, 'store']);
Route::get('/admin_side/project', [ProjectController::class, 'show'])->name('project.show');
Route::get('/admin_side/project/view/{id}', [ProjectController::class, 'view'])->name('project.view');
Route::get('/admin_side/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
Route::post('/projup/{id}', [ProjectController::class, 'update']);
Route::delete('/admin_side/project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');

Route::get('/admin_side/client/add', [ClientController::class, 'create'])->name('client.add');
Route::post('/cliego', [ClientController::class, 'store']);
Route::get('/admin_side/client', [ClientController::class, 'show'])->name('client.show');
Route::get('/admin_side/client/view/{id}', [ClientController::class, 'view'])->name('client.view');
Route::get('/admin_side/client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::post('/clieup/{id}', [ClientController::class, 'update']);
Route::delete('/admin_side/client/delete/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
