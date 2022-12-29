@extends('frontend.master.master')
@section('front_main')
    <div class="about">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">About <span>Us</span></h3>
                <p>{{$about->heading}}</p>
            </div>
            <div class="ab-agile">
                <div class="col-md-6 aboutleft">
                    <h3>{{ $about->title }}</h3>
                    <p class="para1">{{ $about->detail }} </p>
                </div>
                <div class="col-md-6 aboutright ">
                    <img src="{{ asset('backend/images/aboutus/'.$about->image) }}" class="img-responsive" alt="">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
