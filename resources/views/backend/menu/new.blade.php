@extends('layouts.backend')
@section('content')
    <div class="content p-lg-4 p-3">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title mb-4"> Menu Items </h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0"> Create New </h5>
                                <a class="btn btn-outline-primary rounded-pill ms-auto" href="{{ route('menuitems.index')}}">
                                    Go Back
                                </a>
                            </div>
                        </div>
                        <form action="{{ route('menuitems.store')}}" method="post" class="">
                            @csrf
                            <div class="card-body border-0 border-bottom px-lg-5 px-mx-4 px-3">
                                <div class="form-group row py-4">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('name')is-invalid
                                        @enderror"
                                            id="name_id" name="name" value="{{ old('name') }}">
                                        @if ($errors->first('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
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
