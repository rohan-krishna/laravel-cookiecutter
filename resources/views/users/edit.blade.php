@extends('master')

@section('content')

<div class="container">
    <h3>Edit {{ $user->name }}</h3>

    <form action="{{ url("/users/update/".$user->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name: </label>
            <input type="text" name="name" class="form-control" required placeholder="Please Enter Name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email Address: </label>
            <input type="email" name="email" class="form-control" required placeholder="Please Enter Email" value="{{ $user->email }}" disabled>
            <span class="help-text">
                Email address cannot be changed. Please register a new user.
            </span>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="yes" id="changePassword" name="changePassword">
            <label class="form-check-label" for="changePassword">
                Update Password?
            </label>
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control password-input" required placeholder="Please Enter Password" disabled>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation: </label>
            <input type="password" class="form-control password-input" name="password_confirmation" required placeholder="Please Confirm Password" disabled>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
</div>

@endsection

@push('headerScripts')
<script>
    $(document).ready(function() {
        console.log("Hello World!")

        $("#changePassword").click(function() {
            if($(this).is(":checked")) {
                console.log("checked!")
                $(".password-input").attr("disabled", !$(this).is(":checked"))
                $(".password-input").val("")
            } else {
                console.log("Not checked!")
                $(".password-input").attr("disabled", !$(this).is(":checked"))
                $(".password-input").val("")
            }
        })
    })
</script>
@endpush