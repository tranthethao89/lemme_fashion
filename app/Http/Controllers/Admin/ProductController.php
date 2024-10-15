<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\MultiImg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Carbon\Carbon;



class ProductController extends Controller
{
    //
    public function AllProduct()
    {
        $products = Product::latest()->get();
        return view('admin.backend.product.all_product', compact('products'));
    }
    public function AddProduct()
    {

        $categories = Category::latest()->get();
        return view('admin.backend.product.add_product', compact('categories'));
    } // End Method



    public function StoreProduct(Request $request)
    {


        $image_1 = $request->file('product_thambnail_1');
        $manager_1 = new ImageManager(new Driver());
        $name_gen_1 = hexdec(uniqid()) . '.' . $image_1->getClientOriginalExtension();
        $img_1 = $manager_1->read($image_1);
        $img_1->resize(720, 1005)->save(public_path('upload/products/thambnail' . $name_gen_1));
        $save_url_1 = 'upload/products/thambnail' . $name_gen_1;

        $image_2 = $request->file('product_thambnail_2');
        $manager_2 = new ImageManager(new Driver());
        $name_gen_2 = hexdec(uniqid()) . '.' . $image_2->getClientOriginalExtension();
        $img_2 = $manager_2->read($image_2);
        $img_2->resize(720, 1005)->save(public_path('upload/products/thambnail/' . $name_gen_2));
        $save_url_2 = 'upload/products/thambnail/' . $name_gen_2;


        $product_id = Product::insertGetId([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' => $request->product_code,

            'product_qty' => $request->product_qty,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,

            'product_thambnail_1' => $save_url_1,
            'product_thambnail_2' => $save_url_2,
            'status' => 1,
            'created_at' => Carbon::now(),

        ]);

        ////////// Multiple Image Upload Start ///////////

        $images = $request->file('multi_img');
        foreach ($images as $img) {

            $manager_2 = new ImageManager(new Driver());
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $img_3 = $manager_2->read($img);
            $img_3->resize(720, 1005)->save(public_path('upload/products/multi-image/'.$make_name));
            $uploadPath = 'upload/products/multi-image/'.$make_name;

            MultiImg::insert([

                'product_id' => $product_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),

            ]);
        }
        $notification = array(
			'message' => 'Product Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.product')->with($notification);
    }
}
