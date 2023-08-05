@extends('layouts.backend')
@section('content')
    <div class="content p-lg-4 p-3">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title mb-4"> Products </h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0"> Create New Product</h5>
                                <a class="btn btn-outline-primary rounded-pill ms-auto"
                                    href="{{ route('products.index') }}">
                                    Go Back
                                </a>
                            </div>
                        </div>
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body border-0 border-bottom px-lg-5 px-mx-4 px-3">
                                <div class="form-group row py-4">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Product Name </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name_id" name="name">
                                    </div>
                                </div>
                                <div class="form-group row py-4">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Product Photo </label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" id="photo_id" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row py-4">
                                    <label for="category_id" class="col-sm-2 col-form-label"> Product Categoy </label>
                                    <div class="col-sm-10">
                                        <select name="categoy_id" id="category_id" class="form-select">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row py-4">
                                    <label for="product_no_id" class="col-sm-2 col-form-label"> Product No. </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="product_no" id="product_no_id" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-action p-lg-5 p-lg-4 p-3">
                                <button type="submit" class="btn btn-primary me-2">
                                    Save </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    Cancel </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
