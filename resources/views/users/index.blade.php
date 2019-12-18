@extends('master')

@section('content')

<div class="container">
    <h3>User Management</h3>
    <p class="text-muted">Showing All Users</p>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>
                        <a href="{{ $user->path() }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('users.delete', ['user' => $user->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>

</div>

@endsection

