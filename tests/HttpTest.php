 
 <?php

class HttpTestTest extends TestCase
{
    /**
     * @test
     */
    public function testRedirectWithNotAuth() {
    $response = $this->call('GET', URL::to('/admin/add_movie'));

    $this->assertEquals('302', $response->getStatusCode());

    $this->assertEquals(URL::to('/login'), $response->getTargetUrl());

    $response = $this->call('GET', $response->getTargetUrl());

    $this->assertEquals('200', $response->getStatusCode());
}

}