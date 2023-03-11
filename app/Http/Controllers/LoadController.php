<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function businessnews()
    {
        return view('business.businessnews');
    }
    public function entertainmentnews()
    {
        return view('entertainment.entertainmentnews');
    }

    public function whatnews()
    {
        return view('news.whatnews');
    }
    public function travel()
    {
        return view('travel.travel');
    }
    public function video()
    {
        return view('video.videos');
    }
    public function lifestyle()
    {
        return view('lifestyle.lifestyle');
    }
}

