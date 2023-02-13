<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DormirController;
use App\Http\Controllers\SortirController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisiterController;
use App\Http\Controllers\PleinairController;
use App\Http\Controllers\DecouvrirController;
use App\Http\Controllers\CtnbynightController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\StreetfoodController;
use App\Http\Controllers\RestaurantsController;
use App\Http\Controllers\BibliothequeController;

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




Route::get('bibliotheque',[BibliothequeController::class, 'biblio'])->name('biblio');
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('restaurants',[RestaurantsController::class, 'restau'])->name('restau');
Route::get('contact',[ContactController::class, 'contact'])->name('contact');
Route::get('decouvrir',[DecouvrirController::class, 'decouvrir'])->name('decouvrir');
Route::get('disclaimer',[DisclaimerController::class, 'disclaimer'])->name('disclaimer');
Route::get('visiter',[VisiterController::class, 'visiter'])->name('visiter');
Route::get('streetfood',[StreetfoodController::class, 'streetfood'])->name('streetfood');
Route::get('ctnbynight',[CtnbynightController::class, 'ctnbynight'])->name('ctnbynight');
Route::get('pleinair',[PleinairController::class, 'pleinair'])->name('pleinair');
Route::get('faq',[FaqController::class, 'faq'])->name('faq');
Route::get('sortir',[SortirController::class, 'sortir'])->name('sortir');
Route::get('dormir',[DormirController::class, 'dormir'])->name('dormir');
Route::get('test',[TestController::class, 'test'])->name('test');


//Article's Page
Route::get('articles', [ArticleController::class, 'voir'])->name('voir');
//get one article
Route::get('/article/{id}', [ArticleController::class, 'voir_article'])->name('voir-article');
//News' page
Route::get('news', [NewsController::class, 'news'])->name('news');
//get on new
Route::get('/new/{id}', [NewsController::class, 'voir_news'])->name('voir-news');

//pagination


//Contact Page
Route::get('contact', [ContactController::class, 'contacter'])->name('contacter');
Route::post('contact', [ContactController::class, 'envoi'])->name('contact.envoi');
















Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
