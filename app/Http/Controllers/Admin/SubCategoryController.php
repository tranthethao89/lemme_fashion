<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SubCategory as MainModel;
use App\Models\Category;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;


class SubCategoryController extends Controller
{
    public function AllSubCategory() {
        $subcategories = MainModel::latest()->get();
        return view('admin.backend.subcategories.all_subcategory',compact('subcategories'));
    }
    public function AddSubCategory() {
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.backend.subcategories.add_subcategory', compact('categories'));
    }
    public function StoreSubCategory(Request $request) {

        MainModel::create([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->category_name)),

        ]);
        $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
    }

    public function GetSubCategory($category_id) {

        $subcat = MainModel::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return json_encode($subcat);

    }

}
