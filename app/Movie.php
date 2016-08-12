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
namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use DB;
use Image;
use Auth;

/**
 * The Movie model
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
class Movie extends Model
{
    //
    use SearchableTrait;
    protected $fillable = ['original_title', 'poster_path', 'overview', 'video', 'user_id'];

    protected $searchable = [
        'columns' => [
            'movies.original_title' => 10,
            'movies.overview' => 5,

        ],

    ];
    /**
     * Movie/user relationship
     *
     * @return $this->belongsTo('App\User')
    */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Selecting Numbers of movie per page
     *
     * @param int $paginate for number of movies to be shown per page
     *
     * @return $movies
     */
    public function showMovie($paginate)
    {
        $movies = DB::table('movies')->paginate($paginate);
        return $movies;
    }

    /**
     * Here two operations are done
     * saving image in the public folder
     * grabbing the imgpath and overwrite the request for poster path
     *
     * @param int $requests for number of movies to be shown per page
     *
     * @return requests
     */
    public static function saveImage($requests)
    {

        if (!empty($requests['poster_path'])) {
            $image = Image::make($requests['poster_path']->getRealPath());
            $Image_name = public_path() . '/image/' . $requests['poster_path']->getClientOriginalName();
            $image_saver = '/image/' . $requests['poster_path']->getClientOriginalName();
            $image->save($Image_name);
            $requests['poster_path'] = $image_saver;
        }
        return $requests;
    }

    /**
     * Here two operations are done
     * saving image in the public folder
     * grabbing the imgpath and overwrite the request for poster path
     *
     * @param array $user for number of movies to be shown per page
     *
     * @return requests
     */
    public static function wishList($user)
    {
        $movies = Movie::where('user_id', $user->id)->where('wishlist', 1)->get();
        return $movies;
    }

}
