@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Toàn bộ sản phẩm</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.product') }}" class="btn btn-primary waves-effect waves-light">Thêm sản phẩm</a>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Thumnail 1</th>
                                    <th>Thumnail 2</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>QTY</th>
                                    <th>Status</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img src="{{ asset($item->product_thambnail_1) }}" alt="" style="width: 70px; height:40px;">
                                    <td><img src="{{ asset($item->product_thambnail_2) }}" alt="" style="width: 70px; height:40px;">
                                    </td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>{{ $item->discount_price }}</td>
                                    <td>{{ $item->product_qty }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                        <span class="text-success"><b>Active</b></span>
                                        @else
                                        <span class="text-danger"><b>InActive</b></span>
                                        @endif
                                    </td>

                                    {{-- <td><a href="{{ route('edit.menu',$item->id) }}"
                                            class="btn btn-info waves-effect waves-light">Edit</a>
                                        <a href="{{ route('delete.menu',$item->id) }}"
                                            class="btn btn-danger waves-effect waves-light" id="delete">Delete</a>
                                    </td> --}}
                                    <td><a href=""
                                            class="btn btn-info waves-effect waves-light">Edit</a>
                                        <a href=""
                                            class="btn btn-danger waves-effect waves-light" id="delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>


@endsection
