<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Spatie\ResponseCache\Facades\ResponseCache;
use Spatie\Tags\HasTags;
use Spatie\Tags\Tag;
use App\Services\CommonMark\CommonMark;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model implements Feedable
{
    use HasSlug,
        HasTags;

    public $with = ['tags'];
    
    public $dates = ['published_at'];

    public static function boot()
    {
        parent::boot();

        static::saved(function (Post $post) {
            ResponseCache::clear();
        });
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function updateAttributes(array $attributes)
    {
        $this->title            = $attributes['title'];
        $this->text             = $attributes['text'];
        $this->published_at     = $attributes['published_at'];
        $this->save();

        $tags = array_map(function (string $tag) {
            return trim(strtolower($tag));
        }, explode(',', $attributes['tags_text']));
        
        $this->syncTags($tags);
        
        return $this;
    }

    public function getUrlAttribute(): string
    {
        return url('post', $this->slug);
    }

    public function getFormattedTextAttribute()
    {
        return CommonMark::convertToHtml($this->text);
    }

    public function scopePublished(Builder $query)
    {
        $query->whereNotNull('published_at')
              ->where('published_at', '<=', now());
    }

    public static function getFeedItems()
    {
        return static::published()
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc')
            ->limit(100)
            ->get();
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->formatted_text)
            ->updated($this->updated_at)
            ->link($this->url)
            ->author('Johan le Roux');
    }
}
