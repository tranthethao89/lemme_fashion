@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Quản lý Slider</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('slider.create') }}" class="btn btn-primary waves-effect waves-light">Thêm Mới</a>

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
                                    <th>Slider Title</th>
                                    <th>Image</th>
                                    <th>Short Title</th>
                                    <th>Slider link</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $key=> $item)
                                    <tr>

                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->slider_title }}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="" style="width: 70px; height:40px;">
                                        <td>{{ $item->short_title }}</td>
                                        <td>{{ $item->slider_link }}</td>
                                        </td>
                                        <td><a href="#" class="btn btn-info waves-effect waves-light">Edit</a>
                                            <a href="{{ route('slider.delete', $item->id) }}" class="btn btn-danger waves-effect waves-light">Delete</a>
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
