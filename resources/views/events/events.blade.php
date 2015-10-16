@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-4">
            <h1>All Events</h1>

            <a href="{{ route('createEvent') }}" class="btn btn-primary">Create Event</a>
        </div>
        <div class="col-md-8">
            @foreach($events as $event )
                <div class="row">
                    <div class="col-md-3">
                        <img src="http://placehold.it/150x200" alt="" class="img-responsive">

                    </div>
                    <div class="col-md-9">
                        <h1><a href="{{ route('showEvent', [$event->event_id]) }}">{{ $event->title }}</a></h1>
                        {{ $event->description }}
                    </div>

                </div>

                <hr>
            @endforeach
        </div>
    </div>
@stop