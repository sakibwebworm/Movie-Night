<?php
/**
 * SearchController.php File Doc Comment
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

use App\Movie;
/**
 * The SearchController
 *
 * @category  Controller
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class SearchController extends Controller
{
    /**
     * Find movies
     *
     * @param array $request grab the results from movie database
     *
     * @return popular movies
     */
    public function find(Request $request)
    {
        $movies= Movie::search($request->get('q'))->get();
        return view('layouts.search_result', compact('movies'));
    }
}
