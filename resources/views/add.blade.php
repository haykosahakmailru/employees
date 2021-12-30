@extends('layouts.app')
@section('title')
    Add
@endsection
@section('header')
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <h2 class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">Add Employee</h2>

                <div class="text-end">
                    <a type="button" class="btn btn-warning"  href="{{ route('employees') }}">Home</a>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('errors')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{  $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
@section('form')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('add-submit') }}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="firstname">FirstName</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter FirstName">
                    </div>
                    <div class="form-group mt-3">
                        <label for="lastname">LastName</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter LastName">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email"  name="email"placeholder="Enter Email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
