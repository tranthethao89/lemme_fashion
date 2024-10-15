<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Category as MainModel;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;



class CategoryController extends Controller
{

    // public function AllCategory() {
    //     $categories = Category::whereNull('parent_id')->with('categories')->get();
    //     return view('admin.backend.categories.all_category',compact('categories'));
    // }

    public function AllCategory() {
        $categories = MainModel::latest()->get();
        return view('admin.backend.categories.all_category',compact('categories'));
    }
    public function AddCategory() {
        return view('admin.backend.categories.add_category');
    }

    public function StoreCategory(Request $request) {

        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(300,300)->save(public_path('upload/category/'.$name_gen));
            $save_url = 'upload/category/'.$name_gen;

            MainModel::create([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'category_image' => $save_url,
            ]);
        }

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }
    public function CategoryDelete($id) {

        $category = MainModel::findOrFail($id);
        $imgs = $category->category_image;
        unlink($imgs);
        MainModel::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Delected Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);

    }


}
