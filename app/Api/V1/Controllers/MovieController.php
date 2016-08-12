<?php
namespace App\Api\V1\Controllers;
use JWTAuth;
use App\Movie;
use App\Http\Requests;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class MovieController extends Controller
{
    use Helpers;
    public function index()
    {
        return $this
            ->movies()
            ->orderBy('created_at', 'DESC')
            ->get()
            ->toArray();
    }
    public function show($id)
    {
        $movie = $this->currentUser()->movies()->find($id);
        if(!$movie)
            throw new NotFoundHttpException; 
        return $movie;
    }
    public function store(Request $request)
    { $currentUser = JWTAuth::parseToken()->authenticate();
        $movie = new Movie;
        $movie->original_title = $request->get('original_title');
        $movie->overview = $request->get('overview');
        $movie->poster_path = $request->get('poster_path');
	$movie->video = $request->get('video');
	$movie->wishlist=true;
        if($this->currentUser()->movies()->save($movie))
            return $this->response->created();
        else
            return $this->response->error('could_not_create_movie', 500);
    }
    public function update(Request $request, $id)
    {
        $movie = $this->currentUser()->movies()->find($id);
        if(!$movie)
            throw new NotFoundHttpException;
        $movie->fill($request->all());
        if($movie->save())
            return parent::render($request, $e);
        else
            return $this->response->error('could_not_update_movie', 500);
    }
    public function destroy($id)
    {
        $movie = $this->currentUser()->movies()->find($id);
        if(!$movie)
            throw new NotFoundHttpException;
        if($movie->delete())
            return $this->response->noContent();
        else
            return $this->response->error('could_not_delete_movie', 500);
    }
    private function currentUser() {
        return JWTAuth::parseToken()->authenticate();
    }
}