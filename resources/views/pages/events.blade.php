@extends('layouts.master')

@section('content')

    <div class="row">
        <h1>All Events</h1>
    </div>
    <div>
        @foreach($output['events'] as $event)
            <h2>Name: <?= $event['name']['text']?></h2>
        @endforeach
    </div>
@stop