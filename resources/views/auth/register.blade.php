@extends('layouts.master')

@section('content')
    <!-- resources/views/auth/register.blade.php -->

    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}

        <div class="form-group">
            {{--<label for="first_name">First Name:</label>--}}
            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name">
        </div>

        <div class="form-group">
            {{--<label for="first_name">First Name:</label>--}}
            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name">
        </div>

        <div class="form-group">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
@stop