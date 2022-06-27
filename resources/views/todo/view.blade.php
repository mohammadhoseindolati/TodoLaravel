@extends('layouts.master')
@section('content')
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 style="margin-bottom:100px ">View User Detail</h1>
            <p class="p-3 bg-info">Firstname: {{$users->firstname}}</p>
            <p class="p-3 bg-info">Lastname: {{$users->lastname}}</p>
        </div>
    </main>
@endsection
