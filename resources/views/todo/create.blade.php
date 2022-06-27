@extends('layouts.master')
@section('content')
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Create New User</h1>
            <form action="/todo/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">FirstName</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">LastName</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="from-group">
                @if( count($errors->all()) > 0 )
                    <ul class="bg-danger p-2 mt-2" style="color: white">
                        @foreach($errors->all() as $error)
                            <li style="list-style-type: none;" class="p-2">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </main>
@endsection
