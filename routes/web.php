<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

Route::get('/', function () {
    //$posts = ['first post', 'second post', 'third post'];
    $posts = Post::all();


    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get("/posts/{id}", function($id){
    $post = Post::find($id);

    return view('post', [
        'post'=> $post
    ]);
});


Route::get("/posts/new", function(){
    $post = new Post;
    $post->title = 'Posti im i pare';
    $post->content = 'Ky eshte content i postit tim te pare';
    $post->save();
});