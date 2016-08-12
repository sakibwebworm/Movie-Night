<?php
use App\Movie;

class MovieTest extends PHPUnit_Framework_Testcase
{
     public function testExample()
    {
        $this->assertTrue(true);
    }
    
    public function testAMovie()
    {
	    $movie=new Movie(['sakiv','asasas','facebook.com','sasasas']);
	    $this->assertEquals('sakiv',$movie->title);
    }
}
