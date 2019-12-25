@extends('admin.dashboard')

@section('pageTitle')
Home Page
@stop

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>

@endsection
