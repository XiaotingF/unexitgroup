<?php

namespace App\Http\Controllers;


use DB;
use App\Pending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Auth;
use Image;
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




    public function preference($id)
{
    return view('posts.preference');
    
}
public function updatePreferences(Request $request)
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
      $user->importance1 = $request->input('importance1');
      $user->importance2 = $request->input('importance2');
      $user->importance3 = $request->input('importance3');
      $user->importance4 = $request->input('importance4');
      $user->importance5 = $request->input('importance5');
      $user->importance7 = $request->input('importance7');
      $user->importance9 = $request->input('importance9');
      $user->importance10 = $request->input('importance10');
      $user->importance11 = $request->input('importance11');
      $user->importance12 = $request->input('importance12');
      
     
      $user->save();
     // $second = $request->input('q2');
     // $user->q2 = $second;
  
    return view('profile.index', array('user'=> Auth::user()));
}


public function request(Request $request)
{

      //$user = User::find($id);

    $user = Auth::user();

    $single = User::find($request->input('p1'));


        $i =1;


        for($i=1;$i<6;$i++)
        {
            $test = "p".$i;
            //$p_user = DB::table('users')->where('id',$user->id)->first();

            if ($user->$test == $single->id) {
               echo "<script>
                    alert('Request already sent');
                  </script>";

                   return view('profile.index', array('user'=> Auth::user()));

            }
            
           // echo $p_user->$x;
            
        }




     for($v=1;$v<6;$v++)
        {
            $x = "p".$v;
            //$p_user = DB::table('users')->where('id',$user->id)->first();

            if ($user->$x == 0) {
               
               break;

            }
           
           // echo $p_user->$x;
            
        }

        if ($v == 6) {
            echo "<script>
                    alert('Request limit reached');
                  </script>";

                   return view('profile.index', array('user'=> Auth::user()));
        }



         
         $user->$x = $request->input('p1');






      
     
      $single->save();
      $user->save();

     // $second = $request->input('q2');
     // $user->q2 = $second;
  
    return view('posts.pending', ['user'=>Auth::user()]);
    
}

    









public function matches($id)
{
    $user = DB::table('users')->where('id',$id)->first();
        $targets = DB::table('users')->get();
        foreach($targets as $single)
        {
            if($key=(string)$single->id!=$user->id){

            $value=0;
            $key=(string)$single->id;
            /*Q1*/
            $dist1=$user->q1-(int)$single->gender;
            $value=$value+$dist1*$dist1*$user->importance1;
            /*Q2*/
            $dist1=$user->q2-$single->q2;
            $value=$value+$dist1*$dist1*$user->importance2;
            /*Q3*/
            $dist1=$user->q3-$single->q3;
            $value=$value+$dist1*$dist1*$user->importance3;
            /*Q4*/
            $dist1=$user->q4-$single->q4;
            $value=$value+$dist1*$dist1*$user->importance4;
            /*Q5*/
            $dist1=$user->q5-$single->q5;
            $value=$value+$dist1*$dist1*$user->importance5;
            /*Q6&Q7*/
            $dist1=$user->q6-$single->q7;
            $dist2=$user->q7-$single->q6;
            $value=$value+$dist1*$dist1*$user->importance7+$dist2*$dist2*$user->importance7;
            /*Q8&Q9*/
            $dist1=$user->q8-$single->q9;
            $dist2=$user->q9-$single->q8;
            $value=$value+$dist1*$dist1*$user->importance9+$dist2*$dist2*$user->importance9;
            /*Q10*/
            $dist1=$user->q10-$single->q10;
            $value=$value+$dist1*$dist1*$user->importance10;
            /*Q11*/
            $dist1=$user->q11-$single->q11;
            $value=$value+$dist1*$dist1*$user->importance11;
            /*Q12*/
            $dist1=$user->q12-$single->q12;
            $value=$value+$dist1*$dist1*$user->importance12;
            /* more questions */
            $results[$key] = sqrt($value);
        }
        }
        /* sort by similiarity */
        asort($results);
        $max = max($results);
        if($max==0){
            $max=1;
        }
        /* top 10 */
        $seed = rand(0,90);
        $i = 0;
        foreach($results as $user_id => $user_sim)
        {
            $i++;
            if($i==+1)
            {
                $single1 = DB::table('users')->where('id',$user_id)->first();
                $sim1 = round((100-($user_sim/$max)*100));
            }
            if($i==2)
            {
                $single2 = DB::table('users')->where('id',$user_id)->first();
                $sim2 = round((100-($user_sim/$max)*100));
            }
            if($i==3)
            {
                $single3 = DB::table('users')->where('id',$user_id)->first();
                $sim3 = round((100-($user_sim/$max)*100));
            }
            if($i==4)
            {
                $single4 = DB::table('users')->where('id',$user_id)->first();
                $sim4 = round((100-($user_sim/$max)*100));
            }
            if($i==5)
            {
                $single5 = DB::table('users')->where('id',$user_id)->first();
                $sim5 = round((100-($user_sim/$max)*100));
            }
            if($i==6)
            {
                $single6 = DB::table('users')->where('id',$user_id)->first();
                $sim6 = round((100-($user_sim/$max)*100));
            }
            if($i==7)
            {
                $single7 = DB::table('users')->where('id',$user_id)->first();
                $sim7 = round((100-($user_sim/$max)*100));
            }
            if($i==8)
            {
                $single8 = DB::table('users')->where('id',$user_id)->first();
                $sim8 = round((100-($user_sim/$max)*100));
            }
            if($i==9)
            {
                $single9 = DB::table('users')->where('id',$user_id)->first();
                $sim9 = round((100-($user_sim/$max)*100));
            }
            if($i==10)
            {
                $single10 = DB::table('users')->where('id',$user_id)->first();
                $sim10 = round((100-($user_sim/$max)*100));
            }
            if($i==10){
            break;
            }
            
        }

    return view('posts.matches', ['user'=>Auth::user(),
    'single1'=>$single1,
    'sim1'=>$sim1,
    'single2'=>$single2,
    'sim2'=>$sim2,
    'single3'=>$single3,
    'sim3'=>$sim3,
    'single4'=>$single4,
    'sim4'=>$sim4,
    'single5'=>$single5,
    'sim5'=>$sim5,
    'single6'=>$single6,
    'sim6'=>$sim6,
    'single7'=>$single7,
    'sim7'=>$sim7,
    'single8'=>$single8,
    'sim8'=>$sim8,
    'single9'=>$single9,
    'sim9'=>$sim9,
    'single10'=>$single10,
    'sim10'=>$sim10,
    ]);
    
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


    public function pending($id)
{
    $user = Auth::user();

    $single1 = User::find($user->p1);

    $single2 = User::find($user->p2);

    $single3 = User::find($user->p3);

    $single4 = User::find($user->p4);

    $single5 = User::find($user->p5);

    //return view('posts.pending');
     return view('posts.pending', ['user'=>Auth::user(),
    'single1'=>$single1,
    
    'single2'=>$single2,

    'single3'=>$single3,
 
    'single4'=>$single4,

    'single5'=>$single5,
    ]);
    
}
public function waiting($id)
{
    return view('posts.waiting');
    
}
public function matched($id)
{
    return view('posts.matched');
    
}
}
