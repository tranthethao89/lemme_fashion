<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider as MainModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class SliderController extends Controller
{
    //
    public function AllSlider(){
        $sliders = MainModel::latest()->get();
        return view('admin.backend.sliders.all_slider',compact('sliders'));
    } // End Method
    public function AddSlider(){
        return view('admin.backend.sliders.add_slider');
    }
    public function StoreSlider(Request $request){

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(2000,1125)->save(public_path('upload/slider/'.$name_gen));
            $save_url = 'upload/slider/'.$name_gen;

            MainModel::create([
                'slider_title' => $request->slider_title,
                'short_title' => $request->short_title,
                'slider_link' => $request->slider_link,
                'image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.slider')->with($notification);

    }// End Method

    public function SliderDelete($id) {

    	$slider = MainModel::findOrFail($id);
    	$imgs = $slider->image;
    	unlink($imgs);
    	MainModel::findOrFail($id)->delete();
    	$notification = array(
			'message' => 'Slider Delected Successfully',
			'alert-type' => 'info'
		);
		return redirect()->back()->with($notification);

    }
}
