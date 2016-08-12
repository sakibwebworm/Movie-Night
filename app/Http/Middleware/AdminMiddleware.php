<?php
/**
 * Api Doc Comment
 *
 * @category Api
 * @package  MyPackage
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Middleware;
use Auth;
use Closure;

/**
 * The Role model
 *
 * @category  Model
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request http request
     * handle the request
     * @param \Closure                 $next    move forward
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->hasRole('users')) {
            return redirect('home');
        }

        return $next($request);

    }
}
