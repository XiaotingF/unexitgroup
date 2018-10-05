<?php

namespace Tests\Feature;

use DB;
use Auth;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
 

    public function testRegistration()
    {
        $this->visit('/register')
            ->type('Me', 'name')
            ->type('someone@gmail.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')

            ->seeInDatabase('users', ['email' => 'someone@gmail.com']);
    }
    public function testLogin()
    {
        $user = DB::table('users')->where('id','1')->first();

        $this->visit(route('login'))
            ->type($user->email, 'email')
            ->type($user->password, 'password')
            ->press('Login');

        $login_user = Auth::user();    
    }


    
}
