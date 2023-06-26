@extends('layouts.main')

@section('container')
    @auth
        <div class="container" style="display: flex; align-items: center; flex-direction: column; margin-top: 100px">
            <h5>Name: {{ auth()->user()->name }}</h5>
            <h5>Username: {{ auth()->user()->username }}</h5>
            <h5>Email: {{ auth()->user()->email }}</h5>
        </div>
    @endauth
@endsection