<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

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
        $users = video::all();
        return view('video.videos', ['users ' => $users]);
    }

    public function lifestyle()
    {
        return view('lifestyle.lifestyle');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function compliances()
    {
        return view('compliances');
    }
    public function terms()
    {
        return view('terms');
    }
}

