<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\Jobs\AddTip;
use Thujohn\Twitter\Facades\Twitter;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::with('tags')->latest()->get();

        return view('tips.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $post = request()->validate([
            'twitter_id' => 'required',
            'tags.0'     => 'required',
            'tags.*'     => 'string',
        ]);

        try {
            $fetchedTweet = Twitter::getTweet((string) $post['twitter_id']);

            AddTip::dispatch((string) $post['twitter_id'], $post['tags']);
        } catch (RuntimeException $ex) {
            return response()->json([
                'error' => $ex->getMessage(),
            ], 400);
        }
    }
}
