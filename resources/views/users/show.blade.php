@extends('master')

@section('content')

<div class="container">
    <h3>{{ $user->name }}</h3>
    <p class="text-muted">{{ $user->email }}</p>

    <button class="btn btn-primary">Hello</button>
</div>

@endsection

