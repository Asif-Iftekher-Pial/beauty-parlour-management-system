@extends('frontend.master.master')
@section('front_main')
    <div class="contact">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Login</h3>
            </div>
            <div class="gal-btm">
                <div class="map-home">
                    <div class="col-md-12">
                        <div class="col-md-6 contact-w3ls" style="margin-left: 270px;">
                            @include('frontend.layouts.errorAndSuccessMessage')
                            <form action="{{ route('loginSubmit') }}" method="post">
                                @csrf
                                <div class="contact-left agileits-w3layouts">
                                    <div class="f-control">
                                        <label class="header">Email <span>:</span></label>
                                        <input type="email" class="email" name="email" placeholder="Email"
                                            required="">
                                    </div>
                                    <div class="f-control">
                                        <label class="header">Password <span>:</span></label>
                                        <input type="password" class="inputType" name="password"
                                            placeholder="Enter password" required="">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="text-center">
                                    <button type="submit" class="regButton">Login</button>
                                    
                                </div>
                            </form>
                            <div style="text-align: center;margin-top:10px">
                               <p>Need an account?<a href="{{ route('regPage') }}" style="color: red">  SIGN UP</a></p> 
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
