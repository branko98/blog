@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <h1>Register</h1>

    <form action="/register" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" 
                class="form-control"
                id="name"
                name="name">
        </div>
        @include('posts.partials.error-message', ['fieldTitle' => 'name'])

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"
                class="form-control"
                id="email"
                name="email">
        </div>
        @include('posts.partials.error-message', ['fieldTitle' => 'name'])

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"
                class="form-control"
                id="password"
                name="password">
        </div>
        @include('posts.partials.error-message', ['fieldTitle' => 'name'])

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
@endsection