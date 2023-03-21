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
    public function sport(){
        return view('entertainment. sport');
    }

    public function whatnews()
    {
        return view('news.whatnews');
    }
    public function travel()
    {
        return view('travel.travel');
    }
    public function tournigeria(){
        return view('travel.tournigeria');
    }
    public function video()
    {
        $users = video::all();
        return view('video.videos', ['users ' => $users]);
    }
    public function funnyvideos(){
        $user = Video::all();
        return view('video.funnyvideos', compact('user'));
    }
    public function football(){
        $user = Video::all();
        return view('video.football', compact('user'));
    }

    public function lifestyle()
    {
        return view('lifestyle.lifestyle');
    }
    public function lagosstyle(){
        return view('lifestyle.lagosstyle');
    }
    public function abujastyle(){
        return view('lifestyle.abujastyle');
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

