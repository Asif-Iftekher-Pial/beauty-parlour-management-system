@extends('frontend.master.master')
@section('front_main')
    <div class="contact">

        <div class="container">
            <div class="wthree_head_section">

                <h3 class="w3l_header">Update Profile</h3>
            </div>

            <div class="gal-btm">

                <div class="map-home">
                    <div class="col-md-12">
                        @include('frontend.layouts.errorAndSuccessMessage')
                        <div class="col-md-12 contact-w3ls">

                            <form action="{{ route('myProfileUpdate') }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf

                                <div class="contact-left agileits-w3layouts">

                                    <div class="col-md-6">
                                        <div class="f-control">
                                            <label class="header">Name <span>:</span></label>
                                            <input type="text" name="name" placeholder="Name"
                                                value="{{ Auth::user()->name }}" required="">
                                        </div>
                                        <div class="f-control">
                                            <label class="header">Address <span>:</span></label>
                                            <input type="text" name="address" placeholder="Philippine,Bangladesh"
                                                value="{{ Auth::user()->address }}" required="">
                                        </div>

                                        <div class="f-control">
                                            <label class="header">Mobile Number <span>:</span></label>
                                            <input type="number" class="inputType" name="mobile"
                                                placeholder="Mobile Number" value="{{ Auth::user()->mobile }}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="f-control">
                                            <label class="header">Profile Picture <span>:</span></label>
                                            <input type="file" class="inputType" name="image" required="">
                                        </div>
                                        <img style="width: 300px;height:185px"
                                            src="{{ asset('frontend/images/client/' . Auth::user()->image) }}" alt=""
                                            srcset="">
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="text-center">
                                    <button type="submit" class="regButton">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
