<?php
/**
 * Slider.php File Doc Comment
 *
 * @category Model
 * @package  Laravel
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

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
class Role extends Model
{
    //
    protected $fillable = [
        'name',
    ];
   
}
