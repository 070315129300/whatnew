<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Entertainment;
use App\Models\Lifestyle;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Video;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function redirect(){
    if(Auth::id())
    {
        if(auth::user()->usertype == '1')
        {
            return view('home');
        }else{
            return view('pages.index');
        }
    }else{
        return redirect()->back();
    }
    }
    public function insertvideo(Request $request)
    {
       $user = new Video;
       $user ->username = $request->username;
       $user ->body = $request->body;
       $user->type = $request->type;
       $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('videoimage', $imagename);
        $user->image =$imagename;

        $video = $request->video;
        $videoname=time().'.'.$video->getClientoriginalExtension();
        $request->video->move('vivideo', $videoname);
        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'video added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }
    public function addvideos()
    {
        return view('admin.addvideos');
    }
    public function video()
    {
        $users = Video::all();
        return view('video.videos', compact('users'));
    }

    public function adduser()
    {
       return view('admin.adduser', );
    }
    public function alluser()
    {
        $user = User::all();
        return view('admin.alluser', ['user' => $user]);
    }
    public function insertuser(Request $request)
    {
        $user = new User;
        $user ->name = $request->username;
        $user ->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('whatnewimage', $imagename);
        $user->image =$imagename;

        $res = $user->save();
        if($res){
            return back()->with('success', 'video added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }
    public function addlifestyle(){
        return view('admin.addlifestyle');
    }
    public function insertlifestyle(Request $request){

        $user = new Lifestyle();
        $user ->username = $request->username;
        $user->title = $request->title;
        $user ->body = $request->body;
        $user->type = $request->type;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('lifestyleimage', $imagename);
        $user->image =$imagename;

//        $video = $request->video;
//        $videoname=time().'.'.$video->getClientoriginalExtension();
//        $request->video->move('vivideo', $videoname);
//        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'video added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }
    public function addtravel(){
        return view('admin.addtravel');
    }
    public function inserttravel(Request $request){

        $user = new Travel();
        $user ->username = $request->username;
        $user->title = $request->title;
        $user ->body = $request->body;
        $user->type = $request->type;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('travelimage', $imagename);
        $user->image =$imagename;

//        $video = $request->video;
//        $videoname=time().'.'.$video->getClientoriginalExtension();
//        $request->video->move('vivideo', $videoname);
//        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'travel added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }
    public function addbusiness(){
        return view('admin.addbusiness');
    }
    public function insertbusiness(Request $request){

        $user = new Business();
        $user ->username = $request->username;
        $user->title = $request->title;
        $user ->body = $request->body;
        $user->type = $request->type;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('businessimage', $imagename);
        $user->image =$imagename;

//        $video = $request->video;
//        $videoname=time().'.'.$video->getClientoriginalExtension();
//        $request->video->move('vivideo', $videoname);
//        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'business added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }

    }
    public  function addentertainment(){
        return view('admin.addentertainment');
    }
    public function insertentertainment(Request $request){
        $user = new Entertainment();
        $user ->username = $request->username;
        $user->title = $request->title;
        $user ->body = $request->body;
        $user->type = $request->type;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('entertainmentimage', $imagename);
        $user->image =$imagename;

//        $video = $request->video;
//        $videoname=time().'.'.$video->getClientoriginalExtension();
//        $request->video->move('vivideo', $videoname);
//        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'entertainment added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }

    }

}
