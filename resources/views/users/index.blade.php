@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('search')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="GET" action="{{route('search')}}">
        <div class="form-row mb-3">
            <input type="text" class="form-control" name="search" id="search"
                   aria-describedby="emailHelp" placeholder="Search...">
        </div>

        <button type="submit" class="btn btn-success">Search</button>
    </form>
@endsection

@section('title', 'Users')

@section('users')

    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if (count($users))
            <table class="table table-bordered mt-3">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ \Str::limit($user->name, 50) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tel }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>

                        @if( Auth::user()->role  == 1)
                            <td>
                                <form action="{{ route('users.destroy',$user) }}" method="POST">
                                    <a type="button" class="btn btn-info"
                                       href="{{ route('users.show',$user) }}">Show</a>
                                    <a type="button" class="btn btn-warning"
                                       href="{{ route('users.edit',$user) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @else
                            {{null}}
                        @endif


                    </tr>
                @endforeach
            </table>

            {{$users->appends(['search'=> request()->search])->links()}}

        @else
            <p>User not found...</p>
        @endif
    </div>

@endsection
