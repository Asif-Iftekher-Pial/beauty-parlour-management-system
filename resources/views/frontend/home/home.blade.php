@extends('frontend.master.master')
@section('front_main')
    @include('frontend.layouts.errorAndSuccessMessage')
    <!-- banner and header -->
    <div class="banner jarallax" id="home" style="margin-top: 0">
        <img class="jarallax-img" src="{{ asset('frontend/images/22.jpg') }}" alt="">


        <div class="container">
            <!-- header -->
            <!-- //header -->
            <div class="agileits_w3layouts_banner_info">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            @if ($adds->count() > 0)
                                @foreach ($adds as $add)
                                    <li>
                                        <div class="banner-text-w3-agileits">
                                            <h5>{{ $add->heading }}</h5>
                                            <h2>{{ $add->title }}</h2>
                                            <p>{{ $add->detail }}</p>
                                            <div class="botton">
                                                <a href="contact.html">Contact Now</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p>No adds found</p>
                            @endif
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //banner and header -->



    <!-- Modal1 -->
    {{-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Beauty Salon</h4>
                <img src="{{ asset('frontend/images/11.jpg') }}" alt=" " class="img-responsive">
                <h5>Neque porro quisquam est qui dolorem </h5>
                <p>Ut in ligula sollicitudin, auctor elit vel, mollis tortor. Nullam id magna in eros mollis
                    porttitor vel et eros.Phasellus
                    sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin
                    luctus arcu. Donec eros
                    tortor, ultrices in lectus quis, aliquet commodo lectus.Donec eros tortor, ultrices in lectus
                    quis, aliquet commodo
                    lectus.</p>
            </div>
        </div>
    </div>
</div> --}}
    <!-- //Modal1 -->
    <!-- Latest News -->
    <!-- pricing -->
    <div class="w3ls-section wthree-pricing" id="pricing">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Our <span>Services</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>
            <div class="pricing-grids-info">

                @if (count($services) > 0)
                    @foreach ($services as $service)
                        <div class="pricing-grid grid-one" style="margin: 5px;">
                            <div class="w3ls-top" style="padding-top: 0">
                                <img style="width: 225px;height: 115px;"
                                    src="{{ asset('backend/images/service/' . $service->image) }}" alt=""
                                    srcset="">
                            </div>
                            <div class="w3ls-bottom">
                                <ul class="count">
                                    <li style="margin-top: 0">
                                        <h4 style="margin: 0"><a
                                                href="{{ route('serviceDetail', $service->id) }}">{{ substr_replace($service->name, '...', 15) }}</a>
                                        </h4>
                                    </li>
                                    <li style="margin-top: 2px ; padding-top:0px; text-align:justify;max-height: 86px;">
                                        {{ substr_replace($service->description, '...', 100) }}</li>

                                </ul>
                                <h4 style="margin-top: 20px"> ₱ {{ $service->price }}<span class="sup"></span> </h4>
                                <div class="more" style="margin-top:0">
                                    @auth
                                        <button type="submit" class="btn btn-success" style="margin-top: 20px">Make
                                            Appointment</button>
                                    @else
                                        <a href="{{ route('loginPage') }}" class="btn btn-danger btn-sm"
                                            style="margin-top: 20px">Login</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                @endif



                <div class="clearfix"> </div>
                <div class="text-center " style="margin-top: 20px">
                <a href="{{ route('allServices') }}" class="btn btn-sm btn-success">See More</a>

                </div>
                <!--End-slider-script-->
            </div>
        </div>
    </div>
    <!--//pricing-->
    <!-- //Latest News -->
    <!-- wthree-mid -->
    <div class="wthree-mid jarallax">
        <img class="jarallax-img" src="{{ asset('frontend/images/33.jpg') }}" alt="">
        <div class="container">
            <h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
            <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                to make a type specimen book</p>
            <div class="botton">
                <a href="about.html">About Us</a>
            </div>
        </div>
    </div>
    <!-- //wthree-mid -->

    <!-- counter -->
    {{-- <div class="services-bottom jarallax">
    <img class="jarallax-img" src="{{ asset('frontend/images/11.jpg') }}" alt="">
    <div class="banner-dott1">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header two">Our <span>Statistics</span></h3>
                <p class="tho">Treat yourself to a facial or celebrating a special occasion, aromatherapy, our
                    beauty
                    and skin care services will suit every beauty need.</p>
            </div>
            <div class="wthree-agile-counter">
                <div class="col-md-3 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">324</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>Services</h4>
                    </div>
                </div>
                <div class="col-md-3 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">543</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
                <div class="col-md-3 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">434</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>People Loved</h4>
                    </div>
                </div>
                <div class="col-md-3 w3_agile_stats_grid-top">
                    <div class="w3_agile_stats_grid">
                        <div class="agile_count_grid_left">
                            <span class="fa fa-trophy" aria-hidden="true"></span>
                        </div>
                        <div class="agile_count_grid_right">
                            <p class="counter">234</p>
                        </div>
                        <div class="clearfix"> </div>
                        <h4>Win Awards</h4>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div> --}}
    <!-- //counter -->
    <!-- Clients -->
    <div class="clients-main" id="clients">
        <div class="container">
            <!-- Owl-Carousel -->
            <div class="wthree_head_section">
                <h3 class="w3l_header">What <span>People Say</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>
            <div id="owl-demo" class="owl-carousel text-center clients-right">
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>John Smith</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c1.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Jecy Deoco</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c2.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Devid Fahim</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c3.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Honey Jisa</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c1.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Jecy Deoco</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c2.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
                <div class="item g1">
                    <div class="agile-dish-caption">
                        <h4>Devid Fahim</h4>
                        <span>Lorem Ipsum</span>
                    </div>
                    <img class="lazyOwl" src="{{ asset('frontend/images/c3.jpg') }}" alt="" />
                    <div class="clearfix"></div>
                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span>Duis nulla
                        nulla, faucibus id diam ac, luctus sodales
                        purus.
                        Quisque nibh ipsum,Ut accumsan.</p>
                </div>
            </div>
            <!--// Owl-Carousel -->
        </div>
    </div>
    <!--// Clients -->

@endsection
