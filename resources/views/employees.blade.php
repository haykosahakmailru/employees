@extends('layouts.app')
@section('title')
    HomePage
    @endsection
@section('header')
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <h2 class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">Employees Table</h2>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <a type="button" class="btn btn-primary" href="{{ route('search') }}">Search</a>
                </form>

                <div class="text-end">
                    <a type="button" class="btn btn-success" href="{{ route('add') }}">Add</a>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('table')
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td></td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td><a type="button" class="btn btn-warning"  href="{{ route('edit', ['id' => $employee->id]) }}">Edit</a></td>
                <td><a type="button" class="btn btn-danger"  href="{{ route('delete', ['id' => $employee->id]) }}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

