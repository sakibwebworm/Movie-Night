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

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

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
 */class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','api_key',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Relationship of user and role
     *
     * @return $this->belongsToMany('App\Role')->withTimestamps()
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    /**
     * Assign admin role if the code is correct otherwise assing user
     *
     * @param int $code for number of movies to be shown per page
     *
     * @return $this->roles()->attach()
     */
    public function assignroles($code)
    {
        if ($code=='ckpp345s') {
            $this->roles()->attach(2);
        } else {
            $this->roles()->attach(1);
        }


    }
    /**
     * Assign admin role if the code is correct otherwise assing user
     *
     * @return $this->api_key=$key
     */
    public function userhasApikey()
    {
        if (!empty($this->api_key)) {

            return $this->api_key;
        }
    }
    /**
     * Save api key in the user table
     *
     * @param int $key is the api key for a specific user
     *
     * @return $this->api_key=$key
     */
    public function saveapiKey($key)
    {
        $this->api_key=$key;
            
            
    }
    /**
     * User/movie relation
     *
     * @return $this->hasMany('App\Movie')
     */
    public function movies()
    {
        return $this->hasMany('App\Movie');
        
    }
    /**
     * User/movie relation
     *
     * @return $this->hasMany('App\Movie')
     */
    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name==$name)
            {
                return true;
            }
        }
        return false;
    }
}
