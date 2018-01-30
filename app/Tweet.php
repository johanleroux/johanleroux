<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Thujohn\Twitter\Facades\Twitter;

class Tweet extends Model
{
    use Searchable;

    protected $guarded = [];

    protected $dates = ['posted_at'];

    protected $with = ['tags'];

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function toSearchableArray()
    {
        return [
            'author_twitter' => Twitter::linkUser($this->author),
            'author'         => $this->author,
            'link'           => $this->link,
            'oembed'         => $this->oembed,
            'content'        => $this->content,
            'posted_at'      => $this->posted_at,
            'tags'           => $this->tags,
        ];
    }
}
