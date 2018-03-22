<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo;
use App\Video;

class IndexController extends Controller
{
    protected $articles;
    protected $photos;
    protected $videos;

    public function __construct(Article $articles, Photo $photos, Video $videos)
    {
        $this->articles = $articles;
        $this->photos = $photos;
        $this->videos = $videos;
    }

    public function index() {
        $articles = $this->articles->all();
        $photos = $this->photos->all();
        $videos = $this->videos->all();
        $contents = [];
        foreach ($articles as $article)
        {
            array_push($contents, $article->render());
        }
        foreach ($photos as $photo)
        {
            array_push($contents, $photo->render());
        }
        foreach ($videos as $video)
        {
            array_push($contents, $video->render());
        }
        shuffle($contents);
        return view('home')->with('contents', $contents);
    }
}
