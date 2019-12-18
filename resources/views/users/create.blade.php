@extends('master')

@section('content')

<div class="container">
    <h3>Add New User</h3>

    <form action="{{ url("/users/store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name: </label>
            <input type="text" name="name" class="form-control" required placeholder="Please Enter Name">
        </div>

        <div class="form-group">
            <label for="email">Email Address: </label>
            <input type="email" name="email" class="form-control" required placeholder="Please Enter Email">
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control" required placeholder="Please Enter Password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation: </label>
            <input type="password" class="form-control" name="password_confirmation" required placeholder="Please Confirm Password">
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
</div>

@endsection

