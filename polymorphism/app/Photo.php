<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Photo extends Model implements Content
{
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function render()
    {
        return view('contents.photo')
            ->with('url', $this->url)
            ->with('caption', $this->caption)
            ->render();
    }
}
