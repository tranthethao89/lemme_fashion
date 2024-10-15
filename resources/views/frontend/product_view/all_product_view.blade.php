@php
    $products = App\Models\Product::where('status',1)->orderBy('id','DESC')->limit(6)->get();
@endphp

@foreach ($products as $product => $val )

    @php
        $product_image_1 = $val['product_thambnail_1'];
        $product_image_2 = $val['product_thambnail_2'];
        $name            = $val['product_name'];
        $price           = $val['selling_price'];
        $product_id      = $val['id'];
        $product_slug    = $val['product_slug'];
    @endphp
    <div class="swiper-slide" lazy="true">
        <div class="card-product">
            <div class="card-product-wrapper">
                <a href="{{ url('product/details/'.$product_id.'/'.$product_slug) }}" class="product-img">
                    {{-- <img class="lazyload img-product" data-src="{{ asset('frontend/images/products/orange-1.jpg') }}"
                        src="{{ asset('frontend/images/products/orange-1.jpg') }}" alt="image-product">
                    <img class="lazyload img-hover" data-src="{{ asset('frontend/images/products/white-1.jpg') }}"
                        src="{{ asset('frontend/images/products/white-1.jpg') }}" alt="image-product"> --}}
                    <img class="lazyload img-product" data-src="{{ $product_image_1 }}"
                        src="{{ $product_image_1 }}" alt="image-product">
                    <img class="lazyload img-hover" data-src="{{ $product_image_2 }}"
                        src="{{ $product_image_2 }}" alt="image-product">
                </a>
                {{-- data-bs-toggle="modal" --}}
                <div class="list-product-btn">
                    <a href="{{ route('add-to-cart', $product_id )}}"
                        class="box-icon bg_white quick-add tf-btn-loading">
                    {{-- <a href="#" data-bs-toggle="modal" data-url="{{ route('add-to-cart', $product_id ) }}"
                        class="box-icon bg_white quick-add tf-btn-loading add_to_cart"> --}}
                        <input type="hidden" id="product_id">
                        <span class="icon icon-bag"></span>
                        <button class="tooltip">Quick Add</button>
                        {{-- {{ route('add_to_cart',$product->id)}} --}}
                    </a>
                    {{-- <a href="#quick_add" data-bs-toggle="modal"
                        class="box-icon bg_white quick-add tf-btn-loading">
                        <span class="icon icon-bag"></span>
                        <span class="tooltip">Quick Add</span>
                    </a> --}}
                    <a href="javascript:void(0);"
                        class="box-icon bg_white wishlist btn-icon-action">
                        <span class="icon icon-heart"></span>
                        <span class="tooltip">Add to Wishlist</span>
                        <span class="icon icon-delete"></span>
                    </a>
                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                        class="box-icon bg_white compare btn-icon-action">
                        <span class="icon icon-compare"></span>
                        <span class="tooltip">Add to Compare</span>
                        <span class="icon icon-check"></span>
                    </a>
                    <a href="#quick_view" data-bs-toggle="modal"
                        class="box-icon bg_white quickview tf-btn-loading">
                        <span class="icon icon-view"></span>
                        <span class="tooltip">Quick View</span>
                    </a>
                </div>
                <div class="size-list">
                    <span>S</span>
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                </div>
            </div>
            <div class="card-product-info">
                <a href="{{ url('product/details/'.$product_id.'/'.$product_slug) }}" class="title link" target="_blank">{{ $name }}</a>
                <span class="price">{{$price}}K</span>
                <ul class="list-color-product">
                    <li class="list-color-item color-swatch active">
                        <span class="tooltip">Orange</span>
                        <span class="swatch-value bg_orange-3"></span>
                        <img class="lazyload" data-src="{{ asset('frontend/images/products/orange-1.jpg') }}"
                            src="{{ asset('frontend/images/products/orange-1.jpg') }}" alt="image-product">
                    </li>
                    <li class="list-color-item color-swatch">
                        <span class="tooltip">Black</span>
                        <span class="swatch-value bg_dark"></span>
                        <img class="lazyload" data-src="{{ asset('frontend/images/products/black-1.jpg') }}"
                            src="{{ asset('frontend/images/products/black-1.jpg') }}" alt="image-product">
                    </li>
                    <li class="list-color-item color-swatch">
                        <span class="tooltip">White</span>
                        <span class="swatch-value bg_white"></span>
                        <img class="lazyload" data-src="{{ asset('frontend/images/products/white-1.jpg') }}"
                            src="{{ asset('frontend/images/products/white-1.jpg') }}" alt="image-product">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endforeach

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script> --}}
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<script>
    function addTocart(event) {
        event.preventDefault();
        let urlCart = $(this).data('url');
        alert(urlCart);
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: 'json',
            success: function(data){

            },
            error: function (){

            }
        });
    }

    $(function(){
        $('.add_to_cart').on('click', addTocart);
    });
</script>
{{-- <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script>
 --}}





