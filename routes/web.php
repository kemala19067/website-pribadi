<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/resume', function () {
    return view('resume', [
        "title" => "Resume"
    ]);
});

Route::get('/projects', function () {
    return view('projects', [
        "title" => "Projects"
    ]);
});

Route::get('/contact', function () {
    return view('contact.index', [
        "title" => "Contact"
    ]);
});

Route::get('contact', [ContactController::class, 'index']);
Route::post('add', [ContactController::class, 'add']);


