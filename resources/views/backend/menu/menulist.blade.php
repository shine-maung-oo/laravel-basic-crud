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
                                <h5 class="card-title mb-0"> Menu Item List </h5>
                                <a class="btn btn-primary rounded-pill ms-auto add-new" href="{{ route('menuitems.create')}}">
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data[0] as $navitem)
                                        <tr>
                                            <td> {{ $i++ }} </td>
                                            <td>{{ $navitem->name }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('menuitems.edit', $navitem->id) }}"
                                                    class="btn btn-warning btn-sm me-2">Edit</a>
                                                <form method="post"
                                                    action="{{ route('menuitems.destroy', $navitem->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        Remove
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
@endsection
