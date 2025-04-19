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
                        <h3 class="mb-0">Thêm Sản Phẩm Mới</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm Sản Phẩm</li>
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
                <form>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="productName" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="productPrice" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="productPrice" value="0">
                        </div>
                        <div class="col-md-4">
                            <label for="productDiscount" class="form-label">Giảm giá (%)</label>
                            <input type="number" class="form-control" id="productDiscount" value="0">
                        </div>
                        <div class="col-md-4">
                            <label for="productQuantity" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" id="productQuantity" value="0">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                        <textarea class="form-control" id="productDescription" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Ảnh đại diện</label>
                        <input type="file" class="form-control" id="productImage">
                    </div>
                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Danh mục</label>
                        <select class="form-select" id="productCategory">
                            <option selected>Chọn danh mục</option>
                            <option value="1">ACER</option>
                            <option value="2">MACBOOK</option>
                            <option value="3">HP</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="button" class="btn btn-secondary">Hủy bỏ</button>
                        <button type="submit" class="btn btn-primary ms-2">Thêm mới</button>
                    </div>
                </form>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection
