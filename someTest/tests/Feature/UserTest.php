<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Auth;
use laravel\dusk;
use laravel\BrowserKitTesting;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Laravel\BrowserKitTesting\TestCase as BaseTestCase;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testBasicExample()
    {
        $this->baseUrl = env('http://localhost');
        $this->visit('/')
            ->click('About Us')
            ->seePageIs('posts/about_b4login');
    }

  /*  public function testNewUserRegistration()
    {
        $this->visit('posts/register')
            ->select(0, 'gender')
            ->type('Taylor', 'name')
            ->type('tay@gmail.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'confirm password')
            ->press('Register')
            ->seePageIs('posts/home1');
    }*/

   /* public function testLogin()
    {
        \Auth::loginUsingId(1);
    }*/

}
