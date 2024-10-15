<?php
namespace App\Helper;
class Cart
{
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct(){
        $this->items =  session('cart') ? session('cart') : [];
    }

    // Phương thức lấy về danh sách sản phẩm trong giỏ
    public function list() {
        return $this->items;
    }

    // Thêm mới sản phẩm vào giỏ hàng
    public function add($product, $product_qty = 1) {
        $item = [
            'product_id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->discount_price > 0 ? $product->discount_price : $product->selling_price,
            'image' => $product->product_thambnail_1,
            'quantity' => $product->product_qty
        ];
        $this->items[$product->id] = $item;
        session(['cart' => $item]);
    }
}
