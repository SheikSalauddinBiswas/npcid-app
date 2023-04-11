@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 col-md-8">
            <h1 class="h3 mb-0 text-gray-800">Create Users</h1>
                            
        </div>
        <div class="col-md-4">
            <a href="{{ route('users.index')}}"><button class="btn btn-primary">
                Users
            </button></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('users.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>







@endsection