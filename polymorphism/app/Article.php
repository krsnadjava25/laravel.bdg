<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Article extends Model implements Content
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
        return view('contents.article')
            ->with('title', $this->title)
            ->with('content', $this->content)
            ->render();
    }
}
