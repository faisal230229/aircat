<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/services', [FrontendController::class, 'services'])->name('services');

Route::get('/service-detail/{service:slug}', [FrontendController::class, 'serviceDetail'])->name('service-detail');

Route::get('/company-overview', [FrontendController::class, 'companyOverview'])->name('company-overview');

Route::get('/company-milestone', [FrontendController::class, 'companyMilestone'])->name('company-milestone');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::get('/{customPage:slug}', [FrontendController::class, 'customPage'])->name('custom-page');

Route::post('/contact', [FrontendController::class, 'saveContact'])->name('save-contact');
