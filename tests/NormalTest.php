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
    public function testBasicExample()
    {
        $this->visit('/')
             ->click('all_movies')
	     ->see('We Found')
             ;
    }
}