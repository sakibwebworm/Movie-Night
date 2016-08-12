<?php
/**
 * MyClass File Doc Comment
 *
 * @category MyClass
 * @package  MyPackage
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Controllers;

use Request;
use App\Movie;
use App\Http\Requests\CreateMovieRequest;
use Auth;




/**
 * The Movie Controller
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class MoviesController extends Controller
{
    /**
     * Showmovie
     *with pagination
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = new Movie();
        $movies = $movie->showMovie(4);
        return view('layouts.all_movies', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return the view to manually add movie
        return view('admin.add_movie');
    }

    /**
     * Show the quick movie add page
     *
     * @return view quick_add_movie
     */
    public function quickadd()
    {
        //return the view to add movie quickly
        return view('admin.quick_add_movie');
    }

    /**
     * Show the quick movie add page
     *
     * @param CreateMovieRequest $request App\Http\Requests\CreateMovieRequest;
     *
     * @return view
     *
     * @internal param $request
     */
    public function store(CreateMovieRequest $request)
    {
        /*
        Here we 't need to save the poster in public/image folder becuase
        we will save the url of the image which is hosted on tmdb
        */
        //save the post requests in a variable
        $requests = Movie::saveImage(Request::all());
        //object
        $movie = new Movie($requests);
        //session
        \Session::flash('flash_message', 'Your Movie Have Been added!');
        //create the movie
        Auth::user()->movies()->save($movie);
        //redirect to the same page we were before
        return redirect('admin/add_movie');
    }
    /**
     * Store movies from quick add movie
     *
     * @param CreateMovieRequest $request App\Http\Requests\CreateMovieRequest;
     *
     * @return redirect to the quick_add_movie
     *
     * @internal param $request
     */
    public function quickstore(CreateMovieRequest $request)
    {
        /*
        Here we don't need to save the poster in public/image folder becuase
        we will save the url of the image which is hosted on tmdb
        */
        $movie = new Movie(Request::all());
        Auth::user()->movies()->save($movie);
        \Session::flash('flash_message', 'Your Movie Have Been added!');
        return redirect('admin/quick_add_movie');
    }
    /**
     * Store movies from quick add movie
     *
     * @param int $id to find the movie id
     *
     * @return view to the single movie
     *
     * @internal param $request
     */
    public function show($id)
    {
        //find the movie by id and compact it for the video page

        $movie = Movie::findOrFail($id);
        return view('layouts.single_movie', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param createMovieRequest $id to edit the movie
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit movie
        $movie = Movie::findOrFail($id);
        return view('admin.update_movie', compact('movie'));
    }

    /**
     * Process the update method of movie
     *
     * @param CreateMovieRequest $request request laravel
     *                                         The id of the current movie and request
     * @param int                $id      The id of the current movie
     *                                           in the stack passed in $tokens.
     *
     * @return void
     */
    public function update(CreateMovieRequest $request, $id)
    {
        //update movie
        $movie = Movie::findOrFail($id);
        $movie->update(Request::all());
        \Session::flash('flash_message', 'Your Movie Have Been Updated!');
        return redirect('admin/all_movies');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id the id of the movie
     *
     * @return \Illuminate\Http\Response
     *
     * @internal param $int
     */
    public function destroy( $id)
    {
        //delete movie
        $movie = Movie::findOrFail($id);
        $movie->delete();
        \Session::flash('flash_message', 'Your Movie Have Been Deleted!');
        return redirect('admin/all_movies');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id the id of the movie
     *
     * @return \Illuminate\Http\Response
     *
     * @internal param $int
     */
    public function destruction($id)
    {
        //delete movie
        $movie = Movie::findOrFail($id);
        $movie->delete();
        \Session::flash('flash_message', 'Your Movie Have Been Deleted!');
        return redirect('admin/wishlist');
    }
    /**
     * Grab all the movies
     *
     * @return \Illuminate\Http\Response
     */
    public function allmovies()
    {
        //request all movies from db
        $movies = Movie::all();
        return view('admin.all_movies', compact('movies'));
    }
    /**
     * Grab all the movies
     *
     * @return \Illuminate\Http\Response
     */
    public function wishlist()
    {
        $wishlist=Movie::wishList(Auth::user());
        return view('admin.wishlist', compact('wishlist'));
    }
}
