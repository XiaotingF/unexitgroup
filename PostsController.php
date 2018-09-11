<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Auth;
use Image;
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
    $user = DB::table('users')->where('slug',$slug)->first();
        echo $user->name;
        echo '</br>';
        $targets = DB::table('users')->get();
        foreach($targets as $single)
        {
            $value=0;
            $key=(string)$single->id;
            $dist1=$user->smoke-$single->a_smoke;
            $dist2=$user->a_smoke-$single->smoke;
            $value=$value+$dist1*$dist1+$dist2*$dist2;
            /* more questions */
            $results[$key] = sqrt($value);
        }
        /* sort by similiarity */
        print_r($results);
        asort($results);
        echo '</br>';
        print_r($results);
        $max = max($results);
        /* top 10 */
        echo'</br>list:</br>';
        $seed = rand(0,90);
        $i = 0;
        foreach($results as $user_id => $user_sim)
        {
            $i++;
            if($i==1)
            {
                $single1 = DB::table('users')->where('id',$user_id)->first();
                $sim1 = (100-($user_sim/$max)*100);
            }
            if($i==2)
            {
                $single2 = DB::table('users')->where('id',$user_id)->first();
                $sim2 = (100-($user_sim/$max)*100);
            }
            echo'id:'.$user_id.'</br>'.'sim:'.(100-($user_sim/$max)*100).'%</br>';
            if($i==2){
            break;
            }
            
        }
    return view('posts.match', ['user'=>$user,
                                        'single1'=>$single1,
                                        'sim1'=>$sim1,
                                        'single2'=>$single2,
                                        'sim2'=>$sim2,
                                        ]);
    
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
