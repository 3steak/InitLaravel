<?php

use App\Http\Controllers\BlogController;
use App\Models\Post;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () {

    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{id}', 'show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});

// ajout article en BDD
// $post= new Post();
// $post->title = 'Mon xieme article';
// -> content 
// utiliser fonction save pour insérer en BDD
// -> save(); 

// ou $post=Post::create([
    // 'title'-> 'Titre du post',
    // 'slug'-> 'new-title',
// 'content'-> 'dfwsdfq'
// ])
// pour afficher $posts =  Post::all(['id', 'title']); // type collection
// dd($posts[0]->title);
