@extends('layout.layout')

@section('title', 'Show user ' . $user->first_name. ' '. $user->last_name)

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $user->first_name }}
            </div>

            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $user->last_name }}
            </div>

            <div class="form-group">
                <strong>Tel:</strong>
                {{ $user->tel }}
            </div>

            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>

            <div class="form-group">
                <strong>Created:</strong>
                {{ $user->created_at->format('d/m/y H:i:s') }}
            </div>

            <div class="form-group">
                <strong>Updated:</strong>
                {{ $user->updated_at->format('d/m/y H:i:s') }}
            </div>
        </div>

        <form action="{{ route('users.destroy',$user) }}" method="POST" class="mt-3">
            <a type="button" class="btn btn-warning" href="{{ route('users.edit',$user) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>
@endsection
