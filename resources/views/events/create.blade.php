@extends('layouts.master')

@section('head')
    <script src="{{ url("http://tinymce.cachefly.net/4.2/tinymce.min.js") }}"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@stop

@section('content')

    <div class="row">
        <h1>Create an Event</h1>
    </div>
    <div>
        <form method="post" action="{{ route('events') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="description">Description: </label>
                <textarea id="description" name="description" class="form-control" value="{{ old('description') }}"></textarea>
            </div>

            {{--<div class="form-group">--}}
                {{--<label for="title">Title: </label>--}}
                {{--<input type="text" id="title" name="title" value="{{ old('title') }}">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label for="title">Title: </label>--}}
                {{--<input type="text" id="title" name="title" value="{{ old('title') }}">--}}
            {{--</div>--}}

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Event</button>
            </div>
        </form>
    </div>
@stop