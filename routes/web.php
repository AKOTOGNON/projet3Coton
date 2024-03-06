<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WebController;
use App\Models\Register;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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
    return view('index');
});


Route::get('web/blogsecreatire', [WebController::class, 'blogsecretaire'])->name("blogsecretaire");
Route::get('web/blogministere', [WebController::class, 'blogministere'])->name("blogministere");
Route::get('web/blogindustriel', [WebController::class, 'blogindustriel'])->name("blogindustriel");
Route::get('web/blogdetails', [WebController::class, 'blogdetails'])->name("blogdetails");
Route::get('web/contact', [WebController::class, 'contact'])->name("contact");
Route::get('web/dashboard', [WebController::class, 'dashboard'])->name("dashboard");










