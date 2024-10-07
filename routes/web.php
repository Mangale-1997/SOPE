<?php
use App\Http\Controllers\CorouselController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentController;




Route::view('/', 'welcome');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'view_services']);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';


//route for Corousel
Route::get('/slideshow', [App\Http\Controllers\CorouselController::class, 'view'])->name('view_slideshow');
Route::post('/slideshow', [App\Http\Controllers\CorouselController::class, 'store_corousel'])->name('store.corousel');
// Route::resource('/slideshow', [App\Http\Controllers\CorouselController::class, 'clear'])->name('corousel-delete');

// //Route for Services
Route::get('/add-services', [App\Http\Controllers\ServiceController::class, 'view'])->name('viewservices');
Route::post('/add-services', [App\Http\Controllers\ServiceController::class, 'store'])->name('store.services');
Route::get('/servicepage', [App\Http\Controllers\ServiceController::class, 'view_service']);


//route for News
Route::get('/add-news', [App\Http\Controllers\NewsController::class, 'view'])->name('view_news');
Route::post('/add-news', [App\Http\Controllers\NewsController::class, 'store'])->name('store.news');
Route::post('/add-news', [App\Http\Controllers\NewsController::class, 'store'])->name('store.news');

//route for pages
Route::get('/Contactus', [App\Http\Controllers\PagesController::class, 'view'])->name('viewcontact');
Route::get('/servicepage', [App\Http\Controllers\PagesController::class, 'view_services'])->name('view-services');
Route::get('/articles', [App\Http\Controllers\PagesController::class, 'view_articles'])->name('viewarticles');
Route::get('/whoweare', [App\Http\Controllers\PagesController::class, 'view_whoweare'])->name('view-whoweare');
//route for Articles
Route::get('/add-articles', [App\Http\Controllers\ArticlesController::class, 'view'])->name('view-articles');

//route for comment
Route::get('/add-comment', [App\Http\Controllers\CommentController::class, 'view_comment'])->name('view-comment');
Route::post('/Contactus', [App\Http\Controllers\CommentController::class, 'store_comment'])->name('store-comment');

