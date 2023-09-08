<?php

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

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();
    
    return view('posts.index' , [
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Sheets::collection('posts')->all()->first();
    return view('posts.view' , [
        'post' => $post
    ]);
});

Route::get('authors/{author}' , function($author)
{
  
   $posts = Sheets::collection('posts')->
   all()->
   filter(fn ($post) => $post->author == $author);

   return view('authors.view' , [
    'posts' => $posts,
    'authorName' => $posts->first()->author_name, 
   ]);
});

Route::get('tags/{tag}' , function($tag)
{
  
   $posts = Sheets::collection('posts')->all()
   ->filter(fn ($post) => in_array($tag , $post->TAGS));

   return view('tags.view' , [
    'posts' => $posts,
    'tag' => $tag, 
   ]);
});