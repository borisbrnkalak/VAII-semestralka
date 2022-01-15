<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [PagesController::class, "homePage"])->name("home-page");
Route::get('overview', [PagesController::class, "overviewPage"])->name("overview-page");
Route::resource('/our-team', EmployeeController::class)->only(["index", "store", "destroy"])->parameters(['our-team' => 'employee']);
Route::resource("/testimonials", FeedbackController::class)->except(["show", "create"])->parameters([
    'testimonials' => 'feedback'
]);
Route::resource("/products", ProductController::class)->except(["show", "create"]);
Route::resource("/contact", ContactController::class)->only(["index", "store", "destroy"]);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
