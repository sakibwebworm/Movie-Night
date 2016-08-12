 
 <?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JsonTest extends TestCase
{
    /**
     * A basic test
     *
     * @return void
     */

public function testApi()
{   $user = ['email'=>'sakibwebworm@gmail.com','password'=>'123456'];
    $this->post('api/auth/login',$user);    
         ;
}

}