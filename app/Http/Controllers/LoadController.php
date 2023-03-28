<?php

namespace App\Http\Controllers;

use App\Models\Lifestyle;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Business;
use App\Models\Entertainment;
use App\Models\Travel;

class LoadController extends Controller
{
    public function index(){
        $lifestyle = Lifestyle::all();
        $video = Video::all();
        $entertainment = Entertainment::all();
        $travel = Travel::all();
        $business = Business::all();
        return view('pages.index', compact('lifestyle', 'video', 'entertainment', 'travel', 'business'));
    }

    public function businessnews()
    {
        $user = Business::all();
        return view('business.businessnews', compact('user'));
    }
    public function entertainmentnews()
    {
        $user = Entertainment::all();
        return view('entertainment.entertainmentnews', compact('user'));
    }
    public function sport(){
        $user = Entertainment::all();
        return view('entertainment.sport', compact('user'));
    }

    public function whatnews()
    {
        return view('news.whatnews');
    }
    public function travel()
    {
        $user = Travel::all();
        return view('travel.travel', compact('user'));
    }
    public function tournigeria(){
        $user = Travel::all();
        return view('travel.tournigeria', compact('user'));
    }
    public function tourworld(){
        $user = Travel::all();
        return view('travel.tourworld', compact('user'));
    }
    public function video()
    {
        $user = video::all();
        return view('video.videos', compact('user'));
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
        $user = Lifestyle::all();
        return view('lifestyle.lifestyle', compact('user'));
    }
    public function lagosstyle(){
        $user = Lifestyle::all();
        return view('lifestyle.lagosstyle', compact('user'));
    }
    public function abujastyle(){
        $user = Lifestyle::all();
        return view('lifestyle.abujastyle', compact('user'));
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

