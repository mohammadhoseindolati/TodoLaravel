@extends('layouts.master')
@section('content')

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of User</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>
                        <a href="/todo/{{$user->id}}"><button class="btn btn-primary btn-sm">View</button></a>
                        <a href="/todo/{{$user->id}}/edit"><button class="btn btn-outline-primary btn-sm">Edit</button></a>
                        <form action="/todo/{{$user->id}}/delete" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
