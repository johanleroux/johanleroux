<?php

namespace App\Jobs;

use App\Tag;
use App\Tweet;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
use Thujohn\Twitter\Facades\Twitter;

class AddTip implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $twitter_id;
    protected $tags;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $twitter_id, $tags)
    {
        $this->twitter_id = $twitter_id;
        $this->tags = $tags;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fetchedTweet = Twitter::getTweet($this->twitter_id);

        $link = Twitter::linkTweet($fetchedTweet);

        $embed = Twitter::getOembed([
            'url'         => $link,
            'maxwidth'    => 550,
            'hide_thread' => 1,
            'omit_script' => 1,
            'align'       => 'center',
            'theme'       => 'light',
        ]);

        $tweet = Tweet::updateOrCreate([
            'twitter_id' => $this->twitter_id,
        ], [
            'author'         => $fetchedTweet->user->screen_name,
            'author_twitter' => Twitter::linkUser($fetchedTweet->user->screen_name),
            'link'           => $link,
            'content'        => $fetchedTweet->text,
            'oembed'         => $embed->html,
            'posted_at'      => Carbon::parse($fetchedTweet->created_at),
        ]);

        $tags = [];
        foreach ($this->tags as $tag) {
            array_push($tags, Tag::firstOrCreate(['name' => $tag])->id);
        }

        $tweet->tags()->sync($tags);
    }
}
