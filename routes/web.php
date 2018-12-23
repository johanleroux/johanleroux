<?php

use App\Post;
use Spatie\Tags\Tag;
use Illuminate\Support\Facades\DB;

Route::view('/', 'home');

Route::view('/projects', 'projects');

Route::get('/blog/{tag?}', function($tag = null) {
    $tag = Tag::where('slug->en', $tag)->first();

    $posts = Post::published()
                ->when($tag, function ($query, $tag) {
                    $query->withAllTags([$tag]);
                })
                ->orderBy('published_at', 'desc')
                ->orderBy('id', 'desc')
                ->get();
    
    $fetchTags = DB::table('taggables')
                ->select('tag_id', DB::raw('COUNT(tag_id) as tag_used'))
                ->orderBy('tag_used', 'DESC')
                ->groupBy('tag_id')
                ->limit(5)
                ->pluck('tag_id');
                
    $tags = Tag::whereIn('id', $fetchTags)->get();
    
    return view('blog', compact('posts', 'tags'));
});

Route::get('/post/{post}', function($post) {
    $post = Post::published()
                ->where('slug', $post)->firstOrFail();

    return view('post', compact('post'));
});

Route::feeds();