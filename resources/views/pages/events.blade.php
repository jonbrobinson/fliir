@extends('layouts.master')

@section('content')

    <div class="row">
        <h1>All Events</h1>
    </div>
    <div>

        @foreach( $output['events'] as $event)
            <div class="media">
                <div class="media-left">
                    <a href="<?= $event['url'];?>" >
                        <img class="media-object img-responsive" src="<?= $event['logo']['url'];?>" alt="logo">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?= $event['name']['text']?> </h4>
                    <p><?= $event['description']['text'];?></p>
                </div>
            </div>
        @endforeach
    </div>
@stop