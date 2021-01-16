<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Intro
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
  ---------------------------------------------------------------------------
  VIEW COMPOSERS :
  pour mettre des données à disposition de certaines vues
  ---------------------------------------------------------------------------
*/
// CATEGORIES
  View::composer('categories._index', function($view){
  $view->with('categories', App\Models\Categorie::orderBy('name', 'asc')->get());
  });

  // TAGS
  View::composer('tags._index', function($view){
  $view->with('tags', App\Models\Categorie::orderBy('name', 'asc')->get());
  });
/*
  ---------------------------------------------------------------------------
  ROUTES
  ---------------------------------------------------------------------------
*/
// ROUTE PAR DEFAUT
Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PostsController;
Route::get('/posts', [PostsController::class, 'index']);
