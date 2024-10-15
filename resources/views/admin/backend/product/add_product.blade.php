@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Thêm Sản Phẩm</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-body p-4">
                        <!-- {{-- <form id="myForm" action="{{ route{'store.product'} }}" method="post" enctype="multipart/form-data"> --}} -->
                        <form id="myForm" action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Category Name</label>
                                        <select class="form-select" name="category_id">
                                            <option>Chọn</option>
                                            @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">SubCategory Name</label>
                                        <select class="form-select" name="subcategory_id">
                                            <option>Chọn</option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Product Name</label>
                                        <input class="form-control" type="text" name="product_name" onkeyup="ChangeToSlug();"
                                            id="title">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Price</label>
                                        <input class="form-control" type="text" name="selling_price"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Discount Price</label>
                                        <input class="form-control" type="text" name="discount_price"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Size</label>
                                        <input class="form-control" type="text" name="product_size"
                                            id="example-text-input">
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Color</label>
                                        <input class="form-control" type="text" name="product_color"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Product QTY </label>
                                        <input class="form-control" type="text" name="product_qty"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">Product Slug </label>
                                        <input class="form-control" type="text" name="product_slug"
                                            id="slug">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="commentmessage-input" class="form-label">Mô tả ngắn</label>
                                    <textarea class="form-control" id="commentmessage-input" name="short_descp"
                                        placeholder="Your message..." rows="3"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="commentmessage-input" class="form-label">Mô tả dài</label>
                                    <textarea class="form-control" class="myeditor" id="local-upload" placeholder="Your message..." name="long_descp"
                                        rows="3"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="inputProductTitle" class="form-label">Multiple Image</label>
                                    <input class="form-control" name="multi_img[]" type="file" id="multiImg"
                                        multiple="">
                                    <div class="row" id="preview_img"></div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">MainThumb 1</label>
                                        <input class="form-control" name="product_thambnail_1" type="file"
                                            id="product_thambnail_1" onChange="mainThamUrl1(this)">
                                        <img src="" id="mainThmb1" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="example-text-input" class="form-label">MainThumb 2</label>
                                        <input class="form-control" name="product_thambnail_2" type="file"
                                            id="product_thambnail_2" onChange="mainThamUrl2(this)">
                                        <img src="" id="mainThmb2" alt="">

                                    </div>
                                </div>
                                {{-- <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt=""
                                            class="rounded-circle p-1 bg-primary" width="110">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group mb-3">
                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt=""
                                            class="rounded-circle p-1 bg-primary" width="110">
                                    </div>
                                </div> --}}
                                <div class="form-check mt-2 col-xl-6 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="hot_deals">
                                    <label class="form-check-label" for="formCheck2">
                                        Hot Deals
                                    </label>
                                </div>
                                <div class="form-check mt-2 col-xl-6 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="featured">
                                    <label class="form-check-label" for="formCheck2">
                                        Featured
                                    </label>
                                </div>

                                <div class="form-check mt-2 col-xl-6 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="special_offer">
                                    <label class="form-check-label" for="formCheck2">
                                        Special Offer
                                    </label>
                                </div>
                                <div class="form-check mt-2 col-xl-6 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="special_deals">
                                    <label class="form-check-label" for="formCheck2">
                                        Special Deals
                                    </label>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                        Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- end tab content -->
            </div>
            <!-- end col -->

            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>

<script type="text/javascript">
    function mainThamUrl1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb1').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    function mainThamUrl2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb2').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                },
                image: {
                    required : true,
                },

            },
            messages :{
                category_name: {
                    required : 'Please Enter Category Name',
                },
                image: {
                    required : 'Please Select Image',
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>


<script>

    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

</script>

<script type="text/javascript">

    $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: "{{ url('/subcategory/ajax')}}/"+category_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="subcategory_id"]').html('');
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');
                        });
                    },

                });
            } else {
                alert('danger');
            }
        });
    });

</script>

<script type="text/javascript">
    function ChangeToSlug()
            {
                var title, slug;

                //Lấy text từ thẻ input title
                title = document.getElementById("title").value;

                //Đổi chữ hoa thành chữ thường
                slug = title.toLowerCase();

                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('slug').value = slug;
            }
</script>
@endsection
