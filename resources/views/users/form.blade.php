@extends('layout.layout')

@section('title', 'Update user ' . $user->first_name . ' '. $user->last_name)

@section('content')

    <div class="row">

        <div class="pull-right">
            <a class="btn btn-primary mt-3" href="{{ route('users.index') }}">Back</a>
        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.update', $user)}}" class="mt-3">

        @csrf

        @if(isset($user))
            @method('PUT')
        @endif

        <div class="row">
            <div class="col">
                <strong>First Name:</strong>
                <input type="text" name="first_name"
                       value="{{isset($user) ? $user->first_name : null}}"
                       class="form-control" aria-label="first_name" placeholder="First Name...">
            </div>

            <div class="col">
                <strong>Last Name:</strong>
                <input type="text" name="last_name"
                       value="{{isset($user) ? $user->last_name : null}}"
                       class="form-control" aria-label="last_name" placeholder="Last Name...">
            </div>

            <div class="col">
                <strong>Email:</strong>
                <input type="email" name="email"
                       value="{{isset($user) ? $user->email : null}}"
                       class="form-control" aria-label="email" placeholder="Email...">
            </div>

            <div class="col">
                <strong>Tel:</strong>
                <input type="text" name="tel"
                       value="{{isset($user) ? $user->tel : null}}"
                       class="form-control" aria-label="tel" placeholder="Tel..">
            </div>

            <div class="row">
                <div class="col mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </div>
    </form>
@endsection
