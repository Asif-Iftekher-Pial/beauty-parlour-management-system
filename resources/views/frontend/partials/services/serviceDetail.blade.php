@extends('frontend.master.master')
@section('front_main')
    <div class="about">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Service<span></span></h3>
                <p>{{ $serviceDetail->name }}</p>
                @include('frontend.layouts.errorAndSuccessMessage')
            </div>
            <div class="ab-agile">
                <div class="col-md-6 aboutleft">
                    <h3>{{ $serviceDetail->name }}</h3>
                    <p class="para1">{{ $serviceDetail->description }} </p>
                    <h4 class="para1" style="margin-bottom: 20px">Price: ₱ {{ $serviceDetail->price }} </h4>
                    <form action="{{ route('reserveAppointment', $serviceDetail->id) }}" method="post">
                        @csrf
                        <div class="col-md-6">
                            <h4 class="para1">Appoint Date:</h4>
                            <input type="date" name="appointmentDate" id="" required>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h4 class="para1">Time:</h4>
                            <div style="display: flex">
                                <ul style="margin-right: 50px;list-style-type: none;">
                                    <li><input type="radio" name="time" required value="09:00 am" id=""> 09:00 am</li>
                                    <li><input type="radio" name="time" required value="10:00 am" id=""> 10:00 am</li>
                                    <li><input type="radio" name="time" required value="11:00 am" id=""> 11:00 am</li>
                                    <li><input type="radio" name="time" required value="12:00 pm" id=""> 12:00 pm</li>
                                    <li><input type="radio" name="time" required value="01:00 pm" id=""> 01:00 pm</li>
                                    <li><input type="radio" name="time" required value="02:00 pm" id=""> 02:00 pm</li>

                                </ul>
                                <ul style="list-style-type: none;">
                                    <li><input type="radio" name="time" required value="03:00 pm" id=""> 03:00 pm</li>
                                    <li><input type="radio" name="time" required value="04:00 pm" id=""> 04:00 pm</li>
                                    <li><input type="radio" name="time" required value="05:00 pm" id=""> 05:00 pm</li>
                                    <li><input type="radio" name="time" required value="06:00 pm" id=""> 06:00 pm</li>
                                    <li><input type="radio" name="time" required value="07:00 pm" id=""> 07:00 pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center ">
                            @auth
                                <button type="submit" class="btn btn-success" style="margin-top: 20px">Make
                                    Appointment</button>
                            @else
                                <a href="{{ route('loginPage') }}" class="btn btn-danger btn-sm" style="margin-top: 20px">Login</a>
                            @endauth
                        </div>
                    </form>
                </div>
                <div class="col-md-6 aboutright ">
                    <img src="{{ asset('backend/images/service/' . $serviceDetail->image) }}" class="img-responsive"
                        alt="">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
