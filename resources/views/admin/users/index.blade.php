@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 col-md-8">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
                            
        </div>
        <div class="col-md-4">
            <a href="{{ route('users.create')}}"><button class="btn btn-primary">
                Create Users
            </button></a>
        </div>
    </div>
    <hr>
<div class="row">
    <div class="col-md-12">
        <table class="table table-boardered">
            <tr>
                <td>Sl#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Salauddin</td>
                <td>Salauddin@gmail.com</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        </table>
    </div>
</div>






@endsection