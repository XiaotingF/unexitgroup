<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Image;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
   public function index()
{
    return view('posts.index');

}

public function about()
{
    return view('posts.about');
    
}

public function contact()
{
    return view('posts.contact');
    
}
public function answer()
{
    return view('posts.answer');
    
}

 public function register()
{
return view('posts.register');
  }

    public function store()
{
   $post = new User;
$post->name = request('name');
$post->email = request('email');
$post->password = request('password');

$post->save();



return redirect()->preference();
}

    public function preference()
{
    return view('posts.preference');
    
}

public function profile($slug)
{
    return view('posts.profile', array('user'=> Auth::user()));
    
}

public function profile2(Request $request)
{


      //$user = User::find($id);
    $user = Auth::user();

      $user->q1 = $request->input('q1');
      $user->q2 = $request->input('q2');
      $three  = $request->input('q3');
      $user->q3 = $three;
      $four  = $request->input('q4');
      $user->q4 = $four;
      $user->q5 = $request->input('q5');
      $user->q6 = $request->input('q6');
      $user->q7 = $request->input('q7');
      $user->q8 = $request->input('q8');
      $user->q9 = $request->input('q9');
      $user->q10 = $request->input('q10');
      $user->q11 = $request->input('q11');
      $user->q12 = $request->input('q12');
      $user->q13 = $request->input('q13');
      $user->q14 = $request->input('q14');
      $user->q15 = $request->input('q15');
      
     

      $user->save();




     // $second = $request->input('q2');
     // $user->q2 = $second;
  


    return view('posts.profile', array('user'=> Auth::user()));
    
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
return view('posts.profile', array('user'=> Auth::user()));

}

public function home1()
{
    return view('posts.home1');
    
}

public function login()
  {
return view('posts.login');
return redirect()->preference();
  }

    public function logout()
    {
auth()->logout();
return redirect()->home();

    }



    public function aboutb4()
    {
return view('posts.about_b4login');

    }
    public function contactb4()
    {
return view('posts.contact_b4login');

    }
    public function answerb4()
    {
return view('posts.answer_b4login');

    }
}
