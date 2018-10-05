<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Laravel\BrowserKitTesting\TestCase as BaseTestCase;
use laravel\dusk;
use laravel\BrowserKitTesting;
//use Tests\DuskTestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testBasicTest()
    {
        $this->baseUrl = env('http://localhost');

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
