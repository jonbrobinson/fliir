@extends('layouts.master')

@section('content')

    <div class="row">
        <h1>All Events</h1>
    </div>
    @foreach($events as $event )
        <div>
            <h1><a href="{{ route('showEvent', [$event->event_id]) }}">{{ $event->title }}</a></h1>
            <div class="body">{{ $event->description }}</div>

        </div>
    @endforeach
@stop