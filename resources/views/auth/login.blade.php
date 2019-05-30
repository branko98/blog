@extends('layouts.master')

@section('title')
    Login
@endsection


@section('content')

    <h1>login</h1>
    <form action="/login" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"
                class="form-control"
                name="email"
                id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"
                class="form-control"
                name="password"
                id="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
