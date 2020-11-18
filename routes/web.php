<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Home;
use App\Http\Livewire\Contact;

use App\Http\Livewire\Articles\Index;
use App\Http\Livewire\Articles\Create;
use App\Http\Livewire\Articles\Edit;
use App\Http\Livewire\Articles\Show;

use App\Http\Livewire\Categories\ShowCategories;
use App\Http\Livewire\Categories\CreateCategory;
use App\Http\Livewire\Categories\EditCategories;

use App\Http\Livewire\Categories\ShowArticles;

use App\Http\Livewire\Comments\ShowComments;
use App\Http\Livewire\Comments\CreateComment;

use App\Http\Livewire\Tag\ShowTagArticles;

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

Route::get('/', Home::class)->name('home');

Route::get('/contact', Contact::class);

Route::get('/articles', Index::class);
Route::get('/articles/create', Create::class);
Route::get('/articles/{article}/edit/', Edit::class)->name('articles.edit');
Route::get('/articles/{article}', Show::class)->name('articles.show');

Route::get('/categories', ShowCategories::class);
Route::get('/categories/create', CreateCategory::class);
Route::get('/category/{category}/edit/', EditCategories::class);

Route::get('/category/{id}', ShowArticles::class);

Route::get('/comments', ShowComments::class);
Route::get('/comments/create', CreateComment::class);

Route::get('/tag/articles/{id}', ShowTagArticles::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
