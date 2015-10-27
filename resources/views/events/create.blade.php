@extends('layouts.master')

@section('head')
    <script src="{{ url("http://tinymce.cachefly.net/4.2/tinymce.min.js") }}"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="{{ url("http://code.jquery.com/ui/1.11.4/jquery-ui.min.js") }}"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                showWeek: true,
                firstDay: 1
            });
        });
    </script>
@stop

@section('content')

    <div class="row">
        <h1>Create an Event</h1>
    </div>
    <div>
        <form method="post" action="{{ route('events') }}" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>What</h2>
                    <div class="form-group">
                        <label for="title">Title: </label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description: </label>
                        <textarea id="description" name="description" class="form-control" value="{{ old('description') }}"></textarea>
                    </div>

                    <h2>Where</h2>

                    <div class="form-group">
                        <label for="street">Street: </label>
                        <input type="text" id="street" name="street" class="form-control" value="{{ old('street') }}">
                    </div>

                    <div class="form-group">
                        <label for="city">City: </label>
                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}">
                    </div>

                    <div class="form-group">
                        <label for="zipcode">Zipcode: </label>
                        <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode') }}">
                    </div>

                    <div class="form-group">
                        <label for="state">State: </label>
                        <input type="text" id="state" name="state" class="form-control" value="{{ old('state') }}">
                    </div>

                    <h2>When</h2>

                    <div class="form-group">
                        <input type="text" id="datepicker" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
@stop