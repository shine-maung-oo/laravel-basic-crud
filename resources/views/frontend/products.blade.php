@extends('layouts.frontend')

@section('content')
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 g-0">
                    <img src="images/product_banner.png" alt="banner" class="w-100 d-block">
                </div>
            </div>
        </div>
    </section>
    <!-- product  -->
    <section class="all_products">
        <div class="container py-lg-5 py-4 my-lg-5 my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="main_header text-uppercase">
                        Products
                    </h2>
                </div>
                <div class="col-12 my-lg-5 my-4 py-lg-4 py-3">
                    <div class="row g-lg-4 gx-4 gy-5">
                        <div class="col-lg-3 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Categories</h4>
                                </div>
                                <ul class="list-group list-group-flush" role="tablist">
                                    @php
                                        $counter = 0;
                                    @endphp
                                    @foreach ($data[1] as $category)
                                        <li class="list-group-item" aria-selected="false" tabindex="-1" role="tab">
                                            <a class="product-item @if ($counter == 0) active @endif"
                                                href="#category{{ $category->id }}" data-bs-toggle="tab" role="tab">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                        @php
                                            $counter++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- show products  -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content">
                                @php
                                    $counter = 0;
                                @endphp
                                @foreach ($data[1] as $category)
                                    <div class="tab-pane show product_fade_effect @if ($counter == 0) active @endif"
                                        id="category{{ $category->id }}">
                                        <div class="row gx-lg-4 gx-3 gy-4">
                                            @foreach ($data[2] as $product)
                                                @if ($category->id == $product->category_id)
                                                    <div class="col-lg-4 col-md-6 col-12">
                                                        <img src="{{ $product->photo }}" alt="juice" class="w-100"
                                                            data-bs-target="#product{{ $product->id }}"
                                                            data-bs-toggle="modal" type="button">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @php
                                        $counter++;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                        <!-- end show products  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end product  -->
@endsection
<!-- product modal box -->
<section class="product_modal_box">
    @foreach ($data[2] as $product)
        <div class="modal fade" id="product{{ $product->id }}" data-bs-backdrop="static" aria-hidden="true"
            tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <img src="{{ $product->photo }}" alt="piipe" class="w-100">
                            </div>
                            <div class="col-md-6 position-relative">
                                <button type="button"
                                    class="btn btn-sm btn-close position-absolute top-0 end-0 me-md-2 me-3"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="d-flex justify-content-md-center align-items-md-center h-100">
                                    <div class="">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td class="product_label">Name</td>
                                                    <td class="product_detail">{{ $product->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="product_label">No</td>
                                                    <td class="product_detail">{{ $product->product_no }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="product_label">Sort</td>
                                                    @foreach ($data[1] as $category)
                                                        @if ($category->id == $product->category_id)
                                                            <td class="product_detail"> {{$category->name}} </td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
