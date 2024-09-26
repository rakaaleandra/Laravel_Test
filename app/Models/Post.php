<?php

namespace App\Models;
use illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Post extends model{
    use HasFactory;
    // protected $table = 'posts';
    protected $fillable = ['title', 'slug', 'url', 'author_id', 'category_id', 'body'];
    protected $with = ['author', 'category'];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}

// public static function all(){
//     return [
//         [
//             'id' => 1,
//             'slug' => 'judul-artikel-1',
//             'title' => 'Judul Artikel 1',
//             'author' => 'Tere Liye',
//             'url' => 'https://id.wikipedia.org/wiki/Tere_Liye',
//             'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.
//             Accusamus debitis expedita at soluta reprehenderit
//             neque quaerat tempore porro dolorem consectetur
//             explicabo ea harum eum odit eius dolorum, esse id. Vel.'
//         ],
//         [
//             'id' => 2,
//             'slug' => 'judul-artikel-2',
//             'title' => 'Judul Artikel 2',
//             'author' => 'J. K. Rowling',
//             'url' => 'https://en.wikipedia.org/wiki/J._K._Rowling',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam quod sunt libero nesciunt enim
//                 consectetur animi odit pariatur reprehenderit eum expedita excepturi,
//                 quibusdam praesentium ipsum nostrum aliquid labore commodi.'
//         ]
//     ];
// }
// public static function find($slug):array{

//     // return Arr::first(static::all(), function($post) use ($slug){
//     //     return $post['slug'] == $slug;
//     // });

//     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
//     if(! $post){
//         abort(404);
//     }
//     return $post;