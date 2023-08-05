@extends('layouts.backend')
@section('content')
    <div class="content p-lg-4 p-3">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title mb-4"> Contact Address </h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title"> Create New </h5>
                                <a class="btn btn-outline-primary rounded-pill ms-auto" href="{{ route('category.index')}}">
                                    Go Back
                                </a>
                            </div>
                        </div> --}}
                        <form action="{{ route('address.update',1)}}" method="post">
                            @csrf
                            @method("PATCH")
                            <div class="card-body border-0 border-bottom px-lg-5 px-mx-4 px-3">
                                <div class="form-group row py-4">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Address </label>
                                    <div class="col-sm-10">
                                        <textarea name="address" id="address_id" rows="5" class="form-control">
                                            {{ $contact->address }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row py-4">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Email </label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email_id" name="email" value="{{ $contact->email }}">
                                    </div>
                                </div>
                                <div class="form-group row py-4">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Phone </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone_id" name="phone" value="{{ $contact->phone }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-action p-lg-5 p-lg-4 p-3">
                                <button type="submit" class="btn btn-primary">
                                    Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
