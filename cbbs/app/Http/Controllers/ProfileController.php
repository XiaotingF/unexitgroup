<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
class ProfileController extends Controller
{
    public function index($id){
        return view('profile.index', array('user'=> Auth::user()));
    }
    public function update_avatar(Request $request, $id){
        if($request->hasFIle('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));
        
            $user = Auth::user();
            $user->avatar =$filename;
            $user->save();
        
        
        }
        return view('profile.index', array('user'=> Auth::user()));
        
        }
        public function edit(){
            return view('profile.edit', array('user'=> Auth::user()));
        }
}