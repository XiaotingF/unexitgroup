<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\User;
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

public function profile()
{
    return view('posts.profile');
    
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
