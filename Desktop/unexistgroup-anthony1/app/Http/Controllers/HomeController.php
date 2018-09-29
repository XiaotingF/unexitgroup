<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', array('user'=> Auth::user()));
    }
    
   
    
    public function update_avatar(Request $request){
    if($request->hasFIle('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));
    
        $user = Auth::user();
        $user->avatar =$filename;
        $user->save();
    
    
    }
    return view('home/{user}', array('user'=> Auth::user()));
    
    }
}
