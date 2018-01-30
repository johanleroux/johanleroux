<?php

use App\Jobs\AddTip;
use App\Tweet;
use Thujohn\Twitter\Facades\Twitter;

Route::get('/', function () {
    return view('home');
});

Route::get('tips', function () {
    $tweets = Tweet::with('tags')->latest()->get();

    return view('tips.index', compact('tweets'));
});

Route::get('tips/create', function () {
    return view('tips/create');
})->middleware('auth.basic');

Route::post('tips', function () {
    $post = request()->validate([
        'twitter_id' => 'required',
        'tags.0'     => 'required',
        'tags.*'     => 'string',
    ]);

    try {
        $fetchedTweet = Twitter::getTweet((string) $post['twitter_id']);

        AddTip::dispatch((string)$post['twitter_id'], $post['tags']);
    } catch (RuntimeException $ex) {
        return response()->json([
            'error' => $ex->getMessage(),
        ], 400);
    }
})->middleware('auth.basic');
