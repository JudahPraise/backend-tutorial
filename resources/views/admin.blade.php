@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card d-flex flex-column align-items-center mt-3">
                <div class="card-header w-100 d-flex justify-content-between">
                    <h3>Admin Dashboard</h3>
                </div>

                <div class="card-body w-100 d-flex flex-column justify-content-center">
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="{{ route('product.index') }}">Table</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('product.create') }}">Create</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Edit</a>
                        </li>
                    </ul>
                    @yield('adminYield')
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
