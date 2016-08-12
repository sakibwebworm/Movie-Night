<?php
/**
 * Sliderscontroller.php File Doc Comment
 *
 * @category Controller
 * @package  Laravel
 * @author   Sakib <sakibwebworm@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version  php 5.5.6
 * @link     github.com
 */
namespace App\Http\Controllers;
use Request;
use App\Slider;
use App\Http\Requests;
use App\Http\Requests\CreateSliderRequest;
/**
 * The Slider controller
 *
 * @category  Model
 * @package   Laravel
 * @author    Sakib hossain <sakibwebworm@gmail.com>
 * @copyright 2016 sakib hossain
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://github.com
 */
class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //request all slider from db
        
        $sliders=Slider::showSlider(1);
        
        return view('homepage', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSliderRequest $request laravel request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSliderRequest $request)
    {
        //upload the image to public image directory
        $input=Slider::sliderImage(Request::all());
        //create slider
        Slider::create($input);
        //session
        \Session::flash('flash_message', 'Your Slider Have Been added!');
        //redirect to slider upload page
        return redirect('admin/add_slider');
    }
    /**
     * Show the update/delete page for slider
     *
     *@return \Illuminate\Http\Response
     */
    public function updateDeleteslider()
    {
        //return view update/delete slider page
        $sliders=Slider::showSlider(2);
        return view('admin.update_delete_slider', compact('sliders'));
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id for shwoing slider
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //no need for the app according to the plan
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id for requested slider
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view for update slider form
        $slider=Slider::findOrFail($id);
        
        return view('admin.update_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateSliderRequest $request laravel request
     *                                      The id of the current slider and request
     * @param int                 $id      for requested slider update
     *
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSliderRequest $request, $id)
    {
        //update the slider and return a flash message
         $slider=Slider::findOrFail($id);
        $slider->update(Request::all());
        \Session::flash('flash_message', 'Your Slider Have Been Updated!');
        return redirect('admin/update_delete_slider');
      
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id for the requested slider
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider=Slider::findOrFail($id);
        $slider->delete();
        \Session::flash('flash_message', 'Your Slider Have Been Deleted!');
        return redirect('admin/update_delete_slider');
    }
}
