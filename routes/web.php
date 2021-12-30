<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, "homePage"])->name("home-page");
Route::get('overview', [PagesController::class, "overviewPage"])->name("overview-page");
Route::get('our-team', [PagesController::class, "ourTeamPage"])->name("our-team-page");
Route::get('testimonials', [PagesController::class, "testimonialsPage"])->name("testimonials-page");
Route::get('contact', [PagesController::class, "contactPage"])->name("contact-page");
Route::get('product', [PagesController::class, "productPage"])->name("product-page");
