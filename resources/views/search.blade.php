@extends('layouts.app')
@section('title')
    SearchPage
@endsection

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="mt-5">Search Employee</h4><hr>
            <form action="{{  route('search')  }}" method="get">
                <div class="form-group mt-3">
                    <label for="">Enter Employee Name</label>
                    <input type="text" class="form-control mt-3" name="query" placeholder="SEARCH.......">
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a type="button" class="btn btn-warning"  href="{{ route('employees') }}">Home</a>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
@if(isset($employees))
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
        @if(count($employees) > 0)
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
            @else
            <tr>
                <td>No Results</td>
            </tr>
        @endif
        </tbody>

    </table>
@endif
