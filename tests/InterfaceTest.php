<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InterfaceTest extends PHPUnit_Framework_Testcase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testInterface()
    {
        $this->visit('/')
             ->click('all_movies');
    }
}
