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
                                <h5 class="card-title mb-0"> Product List </h5>
                                <a class="btn btn-primary rounded-pill ms-auto add-new"
                                    href="{{ route('products.create') }}">
                                    Add New +
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Product No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($products as $product)
                                            <tr>
                                                <td> {{ $i++ }} </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->product_no }}</td>
                                                <td class="d-flex">
                                                    <button class="btn btn-outline-info btn-sm me-2" data-bs-toggle="modal"
                                                        data-bs-target="#product{{ $product->id }}">
                                                        View
                                                    </button>
                                                    <a href="{{ route('products.edit', $product->id) }}"
                                                        class="btn btn-warning btn-sm me-2">Edit</a>
                                                    <form method="post"
                                                        action="{{ route('products.destroy', $product->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product_modal">
        @foreach ($products as $product)
            <div class="modal fade" id="product{{ $product->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$product->name}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="fw-medium">Product Name</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Product Photo</td>
                                            <td><img src="{{ $product->photo }}" alt="product" style="width: 150px"></td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Category Name</td>
                                            <td> {{$product->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-medium">Product No.</td>
                                            <td>{{ $product->product_no }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
