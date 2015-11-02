@extends('layouts.master')

@section('head')
    <script src="{{ url("http://tinymce.cachefly.net/4.2/tinymce.min.js") }}"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="{{ url("http://code.jquery.com/ui/1.11.4/jquery-ui.min.js") }}"></script>
    <script>
        $(function() {
            $( "#datepicker-start" ).datepicker({
                showWeek: true,
                firstDay: 1
            });
        });

        $(function() {
            $( "#datepicker-end" ).datepicker({
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
                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="title">Title: </label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="photo">Flyer: </label>
                            <input type="file" title=" " id="photo" name="photo" class="form-control" value="{{ old('photo') }}">
                        </div>
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

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="date_start">Start Date: </label>
                            <input type="text" name="date_start" id="datepicker-start" class="form-control" value="{{ old('date_start') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="time_start">Time: </label>
                            <select name="ampm" class="form-control" id="ampm">
                                @foreach($hours as $time)
                                    <option value="{{ $time }}">{{ $time }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ampm">AM/PM: </label>
                            <select name="ampm" class="form-control" id="ampm">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="date-end">End Date: </label>
                            <input type="text" name="date-end" id="datepicker-end" class="form-control" value="{{ old('date_end') }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="time_start">Time: </label>
                            <select name="ampm" class="form-control" id="ampm">
                                @foreach($hours as $time)
                                    <option value="{{ $time }}">{{ $time }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ampm">AM/PM: </label>
                            <select name="ampm" class="form-control" id="ampm">
                                <option value="am">AM</option>
                                <option value="pm">PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop