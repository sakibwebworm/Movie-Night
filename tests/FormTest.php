<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NormalTest extends TestCase
{
    /**
     * A basic test
     *
     * @return void
     */
    protected $pathToFile='C:xampp\htdocs\Movie_Night\public\Image\4.jpg';
    public function testLogin(){

    $this->visit('/login')
     ->type('sakibwebworm@gmail.com', 'email')
     ->type('23456', 'password')
     ->press('Login')
     ;

     return Session::all();
}
}