<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/', function () {
    return view('home', ['title' => 'HOME PAGE']);
});

Route::get('/about/', function () {
    return view('about', ['title' => 'ABOUT']);
});

Route::get('/blog/', function () {
    // $post = Post::with(['author', 'category'])->latest()->get();
    $post = Post::latest()->get();
    return view('blog', ['title' => 'BLOG', 'posts' => $post]);
});

Route::get('/blog/{ubi:slug}', function(Post $ubi){
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $ubi]);
});

Route::get('/author/{user:username}', function(User $user){
    // $post = $user->posts->load('author', 'category');
    return view('blog', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function(Category $category){
    // $post = $category->posts->load('author', 'category');
    return view('blog', ['title' => count($category->posts) . ' Articles in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact/', function () {
    return view('contact', ['title' => 'CONTACT'], ['nama' => 'Raka Aleandra']);
});
