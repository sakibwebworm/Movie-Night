<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test
     *
     * @return void
     */

public function testLogin(){

    $this->visit('/login')
     ->type('sakibwebworm@gmail.com', 'email')
     ->type('23456', 'password')
     ->press('Login');
      return Session::all();
}
}