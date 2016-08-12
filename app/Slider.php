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
use Image;
use DB;
/**
 * The Slider model
 *
 * @category  Model
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class Slider extends Model
{
    //

    protected $fillable = ['poster', 'linked'];

    /**
     * Selecting Numbers of slider in homepage
     *
     * @param int $number for number of sliders to be shown per page
     *
     * @return $slider
     */
    public static function showSlider($number)
    {
        $sliders = DB::table('sliders')->paginate($number);
        return $sliders;
    }

    /**
     * Here two operations are done
     * saving image in the public folder
     * grabbing the imgpath and overwrite the request for poster
     *
     * @param int $input contains the Form data
     *
     * @return input
     */
    public static function sliderImage($input)
    {
        if (!empty($input['poster'])) {
            $image = Image::make($input['poster']->getRealPath());
            $Image_name = public_path() . '/image/' . $input['poster']->getClientOriginalName();
            $image_saver = '/image/' . $input['poster']->getClientOriginalName();
            $image->save($Image_name);
            $input['poster'] = $image_saver;

        }
        return $input;
    }

}
