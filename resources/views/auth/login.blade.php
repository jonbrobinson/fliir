@extends('layouts.master')

@section('content')
    <div class="">
        <img src="http://placehold.it/200x250" class="img-responsive center-block">
    </div>
    <div class="col-md-4 col-md-offset-4">
        <!-- resources/views/auth/login.blade.php -->
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

            <div class="form-group">
                Email
                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
            </div>

            <div class="form-group">
                Password
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember" class="form-control"> Remember Me
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Login</button>

                <a href="{{ url('auth/register') }}" class="btn btn-default pull-right">Create Account</a>
            </div>
        </form>
    </div>
@stop
