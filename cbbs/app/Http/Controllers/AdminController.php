<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getusers()
    {
        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }

    public function clickOption()
    {
        $user = User::find(['status']);
        echo $user;
        if (Option::get(0)) {
            $user->update(['status' => '0']);
        } elseif (User::get(1))
        {
            $user->update(['status' => '1']);
        }
        else
        {
            return "select option"; //i am ending us with this all the time.

        }
        return $user;
    }

}

/*  $user = \App\User::find(['status'=>$status]);

            if (Option::get('enable')) {
                $user->update(['status' => '0']);
            } elseif (Option::has('disable')) {
                $user->update(['status' => '1']);
            }
            else
                {
                return "select option"; //i am ending us with this all the time.

            }
            return $user;*/

/*{
            $status = User::where('status', 0)->get();

            $user = User::select('status')->whereId($status)->first();
            if($user->status == 0)
            {
                $user->status = 1;
            }
            else
                {
                $user->status = 0;
            }
            $user->update();
            $notification = [
                'message' => 'Updated Successfully!',
                'alert-type' => 'success'
            ];
            return back()->with($notification);
        }*/

/* {
            $user = Auth::user();
            $user->status = $request->input('status');
            $user->save();
            return view('dashboard', ['users' => $user]);
        }*/
