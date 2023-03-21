<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function redirect(){

    }
    public function insertvideo(Request $request)
    {
       $user = new Video;
       $user ->username = $request->username;
       $user ->body = $request->body;
       $user->type = $request->type;
       $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('whatnewimage', $imagename);
        $user->image =$imagename;

        $video = $request->video;
        $videoname=time().'.'.$video->getClientoriginalExtension();
        $request->video->move('whatnewvideo', $videoname);
        $user->video =$videoname;

        $user-> date = $request->date;

        $res = $user->save();
        if($res){
            return back()->with('success', 'video added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }

    public function adduser()
    {

       return view('admin.adduser', );

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

}
