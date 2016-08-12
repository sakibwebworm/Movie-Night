 
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
    protected $pathToFile='C:xampp\htdocs\Movie_Night\public\Image\4.jpg';
public function testMovieUpload()
{   $user = factory(App\User::class)->create();
    $this->actingAs($user)
    ->visit('/admin/add_movie')
    ->type('Taylor','original_title')
    ->type('otwell','overview')
    ->attach($this->pathToFile, 'poster_path')
    ->type('video url','video')    
     ->press('Submit')
         ;
}

}