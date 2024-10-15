@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">All Category</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            {{-- <a href="{{ route('add.category') }}" class="btn btn-primary waves-effect waves-light">Thêm danh mục</a> --}}
                            <a href="{{ route('add.category') }}" class="btn btn-primary waves-effect waves-light">Thêm danh mục</a>
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
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Image</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $item )
                                    <tr>

                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->category_slug }}</td>
                                        <td><img src="{{ asset($item->category_image) }}" alt="" style="width: 70px; height:40px;">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-info waves-effect waves-light">Sửa</a>
                                            {{-- <a href="{{ route('category.delete', $item->id) }}" class="btn btn-danger waves-effect waves-light">Delete</a> --}}
                                            {{-- <a href="" class="btn btn-danger waves-effect waves-light">Delete</a> --}}
                                            <a href="{{ route('category.delete', $item->id) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
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
