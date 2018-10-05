<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use DB;
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
            $userData = DB::table('users')
            ->leftJoin('profile', 'profile.user_id','users.id')
            ->where('users.id',Auth::user()->id)
            ->get();
          return view('profile.edit')->with('userData', $userData);
            //return view('profile.edit', array('user'=> Auth::user()));
        }
}