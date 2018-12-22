<?php

use App\Post;
use Spatie\Tags\Tag;

Route::view('/', 'home');

Route::view('/projects', 'projects');

Route::get('/blog/{tag?}', function($tag = null) {
    $tag = Tag::where('slug->en', $tag)->first();

    $posts = Post::whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->when($tag, function ($query, $tag) {
                    $query->withAllTags([$tag]);
                })
                ->orderBy('published_at', 'desc')
                ->orderBy('id', 'desc')
                ->get();
    
    $tags = Tag::get();
    
    return view('blog', compact('posts', 'tags'));
});

Route::get('/post/{post}', function($post) {
    $post = Post::whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->where('slug', $post)->firstOrFail();

    return view('post', compact('post'));
});
