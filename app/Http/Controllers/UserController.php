<?php
/**
 * UserController.php File Doc Comment
 *
 * @category Controller
 * @package  Laravel
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Controllers;

use App\User;
use auth;
use Request;
/**
 * The UserController
 *
 * @category  Controller
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class UserController extends Controller
{
    /**
     * Show api key
     *
     * @return popular movies
     */
    public function showapi()
    {
        return view('admin.api');
    }
    /**
     * Show api key
     *
     * @param Request $request for handling saving api
     *
     * @return popular movies
     */
    public function saveapi(Request $request)
    {
        $rr=Request::all();
        $id=Request::input('user_id');
        $user=User::findOrFail($id);
        $user->update(Request::all());
        \Session::flash('flash_message', 'Your Movie Have Been Updated!');
        return $rr;
    }
    
}
