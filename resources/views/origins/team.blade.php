@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('layouts.partials.aboutSideBar')
        </div>
        <div class="col-md-9">
            <h1>Meet The Team</h1>

            <div class="row">
                <div class="col-md-3">
                    <img src="http://placehold.it/150x200" alt="Jonathan Robinson" class="img-responsive">
                </div>

                <div class="col-md-9">
                    <h3>Jonathan Robinson</h3>
                    <h5>Founder | Director of Content</h5>
                    <p>Jonathan is a self taught achiever. From web development to video production Jonathan is a self taught tech enthusiast and lover of digital content.
                        From walking on two sports in college to working at multiple fortune 500 companies, he knows what it takes to work hard and  
                    </p>
                    <p>Hi I'm Jonathan, I love life and I want to make sure you are enjoying every moment as much as I am.
                        I started Fliir to help you find opportunities within your city.  I have called multiple cities home and I know finding your niche is the hardest part of living anywhere.
                        I'm making it my mission to make sure you can find the right events and jobs in your city.</p>
                </div>

            </div>
            <hr>
        </div>
    </div>
@stop