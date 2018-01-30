<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use Searchable;

    protected $guarded = [];

    public function tweets()
    {
        return $this->belongsToMany('App\Tweet');
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
        ];
    }
}
