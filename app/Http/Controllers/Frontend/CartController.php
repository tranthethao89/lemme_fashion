<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
// use App\Helper\Cart;

class CartController extends Controller
{
    public function AddToCart($id){

        // session()->forget('cart');
        // dd('end');

        $products = Product::find($id);
        // dd($products);
        session_start();
        $cart = session()->get('cart',[]);
            if (isset($cart[$id])) {
                // $cart[$id]['product_qty']++;
                $cart[$id]['product_qty'] = $cart[$id]['product_qty'] + 1;
            } else {
                $priceToShow = isset($products->discount_price) ? $products->discount_price : $products->selling_price;
                $cart[$id] = [
                    'id' => $id,
                    'name' => $products->product_name,
                    'image_1' => $products->product_thambnail_1,
                    // 'image_2' => $products->product_thambnail_2,
                    'price' => $priceToShow,
                    'product_qty' => 1
                ];
            }
            session()->put('cart',$cart);
            // dd($cart);
            // return response()->json($cart);
            $notification = array(
                'message' => 'Add to Cart Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

    }
    //End Method


    // public function addToCart($id){

    //     //    dd('add_to_card --------' . $id);

    //     //Xóa session
    //     // session()->forget('cart');
    //     // dd('end');

    //     session()->flush('cart');
    //     $product =  Product::find($id);
    //     $cart = session()->get('cart');

    //     if(isset($cart[$id])) {

    //             $cart[$id]['product_qty'] = $cart[$id]['product_qty'] + 1;

    //         } else {
    //             $cart[$id] = [
    //                 'name' => $product->product_name,
    //                 'price' => $product->discount_price,
    //                 'quantity' => 1
    //             ];
    //     }
    //     session()->put('cart', $cart);

    //     echo "<pre>";
    //     print_r(session()->get('cart'));

    // }
    //End Method

    public function index(Cart $cart) {

        $cartItems = $cart->list();
        // dd($cartItems);
        return view('frontend.allproduct.cart', compact('cartItems'));

        // dd($cart->list());
        // return view('')
    }

    public function add(Request $request, Cart $cart){

        $product = Product::find($request->id);
        $quantity = $request->product_qty;
        $cart->add($product, $quantity);
        // dd($cart);
        return redirect()->route('cart.index');
        // dd($product);
        // dd($request->all());



    }
}
