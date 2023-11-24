
<?php

use App\Http\Controllers\BackOffice\AbsensiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackOffice\DashboardController;
use App\Http\Controllers\BackOffice\UserController;
use App\Http\Controllers\BackOffice\CategoryController;
use App\Http\Controllers\BackOffice\RecipeCategoryController;
use App\Http\Controllers\BackOffice\ArticleController;
use App\Http\Controllers\BackOffice\RecipeController;
use App\Http\Controllers\SiteController;
use App\Models\Voucher;

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
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/testing', [SiteController::class, 'testing'])->name('testing');
Route::post('/testingSend', [SiteController::class, 'testingSend'])->name('testingSend');
Route::get('/resep', [SiteController::class, 'recipe'])->name('resep');
Route::get('/resep/{id}', [SiteController::class, 'recipeDetail'])->name('resep.detail');
Route::get('/artikel', [SiteController::class, 'article'])->name('artikel');
Route::get('/artikel/{id}', [SiteController::class, 'articleDetail'])->name('artikel.detail');
Route::get('/konsultasi', [SiteController::class, 'consultation'])->name('konsultasi');
Route::get('/konsultasi/{id}', [SiteController::class, 'consultationDetail'])->name('konsultasi.detail');
Route::get('/tentang', [SiteController::class, 'about'])->name('tentang');
Route::get('/createReservation', [SiteController::class, 'createReservation'])->name('createReservation');
Route::post('/reservation', [SiteController::class, 'reservation'])->name('reservation');
Route::post('/send', [SiteController::class, 'send'])->name('consultation.send');
Route::get('/getChat/{id}', [SiteController::class, 'chat'])->name('chat');
Route::middleware(['auth',  'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profil', [UserController::class, 'profile'])->name('profile');
    Route::post('/profil', [UserController::class, 'updateProfile']);
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('article', ArticleController::class);
    Route::resource('recipe_category', RecipeCategoryController::class);
    Route::resource('recipe', RecipeController::class);
});
