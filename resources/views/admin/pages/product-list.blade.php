@extends('admin.layout.layout-admin')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Danh Sách Sản Phẩm</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="card mb-4">
                    <div class="row mt-2 ms-1">
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="ID">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Name..">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>Danh mục</option>
                                <option value="1">ACER</option>
                                <option value="2">MACBOOK</option>
                                <option value="3">HP</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <a class="btn btn-primary me-2">

                                    Tìm kiếm
                                </a>
                                <a class="btn btn-info text-white">

                                    Thêm mới
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 3%">ID</th>
                                    <th>Tên</th>
                                    <th style="width: 10%">Hình</th>
                                    <th style="width: 10%">Nhà Sản Xuất</th>
                                    <th style="width: 10%">Giá</th>
                                    <th style="width: 5%">HOT</th>
                                    <th style="width: 8%">Hiển Thị</th>
                                    <th style="width: 25%">Hoạt Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sanphams as $sanpham)
                                    <tr class="text-center">
                                        <td>{{ $sanpham->id }}</td>
                                        <td class="text-start">Update software</td>
                                        <td>
                                            <div class="d-grid place-items-center" style="width: 40px; height: 40px;">
                                                <img src="{{ asset('assets/admin/img/logoADS.png') }}" alt="LAPTOP"
                                                    class="img-fluid" style="max-height: 100%;">
                                            </div>
                                        </td>
                                        <td>
                                            ACER
                                        </td>
                                        <td>{{ $sanpham->gia }}</td>
                                        <td><span class="badge text-bg-danger">Có</span></td>
                                        <td>Có</td>
                                        <td class="project-actions text-start">
                                            <span class="me-4">2025-04-03 22:10:00</span>

                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @emty
                                    <tr>
                                        <td colspan="6" class="text-center">Không có sản phẩm nào.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>

                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection
