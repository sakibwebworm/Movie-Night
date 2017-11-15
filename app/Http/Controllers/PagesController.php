<?php
/**
 * PagesController.php File Doc Comment
 *
 * @category Controller
 * @package  Laravel
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Client;

//use view;

/**
 * The PagesController
 *
 * @category  Controller
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class PagesController extends Controller
{
    /**
     * Fetch a list of popular movies
     *
     * @return popular movies
     */
    public function index()
    {
         //base uri
         $client = new Client(['base_uri' => 'https://api.themoviedb.org/']);
        //guzzle
         $response = $client->get('https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=aa8b43b8cbce9d1689bef3d0c3087e4d&limit=5');
         $popular_movies=array_pluck( json_decode($response->getBody()->getContents(), true)['results'], 'original_title', 'poster_path');
        array_splice($popular_movies, 4);
        
        return view('layouts.movie_night', compact('popular_movies'));
    }

    
    
}

