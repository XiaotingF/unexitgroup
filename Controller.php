<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getUsername($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        echo $user->name;
    }
    public function getUseremail($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        echo $user->email;
    }
    public function getUserbio($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return view("/posts/home1",['user'=>$user]);
    }

    public function match($id)
    {
    /* cofficents for user defining weighting for themselves 
    $sig_co=1.25;
    $def_co=1;
    $uimp_co=0.5;
    $bool=999;
    */
        $user = DB::table('users')->where('id',$id)->first();
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
        return view("/posts/home1",['user'=>$user,
                                        'single1'=>$single1,
                                        'sim1'=>$sim1,
                                        'single2'=>$single2,
                                        'sim2'=>$sim2,
                                        ]);
    }
    public function rematch($id)
    {
    /* cofficents for user defining weighting for themselves 
    $sig_co=1.25;
    $def_co=1;
    $uimp_co=0.5;
    $bool=999;
    */
        $user = DB::table('users')->where('id',$id)->first();
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
            if($i==$seed+1)
            {
                $single1 = DB::table('users')->where('id',$user_id)->first();
                $sim1 = (100-($user_sim/$max)*100);
            }
            if($i==$seed+2)
            {
                $single2 = DB::table('users')->where('id',$user_id)->first();
                $sim2 = (100-($user_sim/$max)*100);
            }
            echo'id:'.$user_id.'</br>'.'sim:'.(100-($user_sim/$max)*100).'%</br>';
            if($i==2){
            break;
            }
            
            
        }
        return view("/posts/home1",['user'=>$user,
                                        'single1'=>$single1,
                                        'sim1'=>$sim1,
                                        'single2'=>$single2,
                                        'sim2'=>$sim2,
                                        ]);
    }
}
