@extends('frontend.master.master')
@section('front_main')
    <div class="contact">
        
        <div class="container">
            <div class="wthree_head_section">
                
                <h3 class="w3l_header">Registration</h3>
            </div>
            
            <div class="gal-btm">
                
                <div class="map-home">
                    <div class="col-md-12">
                        @include('frontend.layouts.errorAndSuccessMessage')
                        <div class="col-md-12 contact-w3ls">
                            
                            <form action="{{ route('regSubmit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="contact-left agileits-w3layouts">
                                    
                                    <div class="col-md-6">
                                        <div class="f-control">
                                            <label class="header">Name <span>:</span></label>
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="f-control">
                                            <label class="header">Address <span>:</span></label>
                                            <input type="text" name="address" placeholder="Philippine,Bangladesh" required="">
                                        </div>
        
                                        <div class="f-control">
                                            <label class="header">Mobile Number <span>:</span></label>
                                            <input type="text" name="mobile" placeholder="Mobile Number" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        
                                        <div class="f-control">
                                            <label class="header">Email <span>:</span></label>
                                            <input type="email" class="email" name="email" placeholder="Email" required="">
                                        </div>
                                        
                                        <div class="f-control">
                                            <label class="header">Password <span>:</span></label>
                                            <input type="password" class="inputType" name="password" placeholder="Enter password" required="">
                                        </div>
                                        <div class="f-control">
                                            <label class="header">Profile Picture <span>:</span></label>
                                            <input type="file" class="inputType" name="image"  required="">
                                        </div>
                                    </div>
                                    
    
                                </div>
                                <div class="clearfix"> </div>
                                <div class="text-center">
                                <button type="submit" class="regButton">Registration</button>

                                </div>
                            </form>
                        </div>
                        {{-- <div class="col-md-4 contact-w3ls">
                            <form action="#" method="post">
                               
                                <div class="f-control">
                                    <label class="header">Email <span>:</span></label>
                                    <input type="email" class="email" name="Email" placeholder="Email" required="">
                                </div>
    
                                <div class="f-control">
                                    <label class="header">Password <span>:</span></label>
                                    <input type="password" class="inputType" name="password" placeholder="Mobile Number" required="">
                                </div>
                                <div class="clearfix"> </div>
                                <div style="text-align: center">
                                <button type="submit" style="margin-left: 0" class="regButton">Login</button>
    
                                </div>
                            </form>
                        </div> --}}
                        {{-- <div class="clearfix"></div> --}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
