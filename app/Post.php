<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;
use Spatie\Tags\Tag;
use App\Services\CommonMark\CommonMark;

class Post extends Model
{
    use HasSlug,
        HasTags;

    public $with = ['tags'];
    
    public $dates = ['published_at'];

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
}
