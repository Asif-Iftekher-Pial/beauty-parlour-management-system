@extends('frontend.master.master')
@section('front_main')
    <div class="practice-areas" style="padding-bottom: 0;margin-bottom:10px">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Our <span>Services</span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>
            <div class="agileinfo-top-grids">

                @if (count($allservices) > 0)
                    @foreach ($allservices as $item )
                    <div class="col-sm-4 wthree-top-grid">
                        <img style="height: 220px;" src="{{ asset('backend/images/service/'.$item->image) }}" class="img-responsive" alt="">
                        <h4> <a href="{{ route('serviceDetail', $item->id) }}">{{ $item->name }}</a> </h4>
                        <h4 style="color: black">{{ $item->price }} ₱</h4>
                        <p style="margin-bottom: 10px">{{ $item->description }}</p>
                        <div class="text-center">
                            <a href="{{ route('serviceDetail', $item->id) }}" class="btn btn-sm btn-success ">appointment</a>
                        </div>
                        
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                   

                    
                    <div class="text-center">
                        {{ $allservices->links('vendor.pagination.custom') }}

                        {{-- <ul class="pagination pagination-lg">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-left">«</i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-right">»</i></a></li>
                        </ul> --}}
                    </div>
                    
                @else
                    <p>No services found</p>
                @endif
                
               
                
            </div>

            
        </div>
    </div>

    <div class="wthree-mid jarallax">

        <div class="container">
            <h3>Nisl amet dolor sit ipsum veroeros sed blandit</h3>
            <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book</p>
            <div class="botton">
                <a href="#">About Us</a>
            </div>
        </div>
        <div id="jarallax-container-1"
            style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
            <img class="jarallax-img" src="{{ asset('frontend/images/33.jpg') }}" alt=""
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1349px; height: 354.406px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -30.2031px; transform: translate3d(0px, 57.6016px, 0px);">
        </div>
    </div>


    <div class="agileits-about-top">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header">Services <span>Overview </span></h3>
                <p>Treat yourself to a facial or celebrating a special occasion, aromatherapy, our beauty
                    and skin care services will suit every beauty need.</p>
            </div>
             <div class="area-main">
                <div class="col-md-6 area-inner">
                    <div class="area-img1">
                    </div>
                    <div class="area-right p1">
                        <h5>FACIAL</h5>
                        <p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis
                            et dolor eget, sollicitudin luctus arcu.
                            Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
                    </div>
                </div>
                <div class="col-md-6 area-inner">
                    <div class="area-img2">
                    </div>
                    <div class="area-right p2">
                        <h5>MAKEUP</h5>
                        <p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa,
                            lobortis et dolor eget, sollicitudin luctus arcu.
                            Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
                    </div>
                </div>
            </div>
            <div class="area-main">
                <div class="col-md-6 area-inner">
                    <div class="area-right p3">
                        <h5>NAIL CARE</h5>
                        <p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa,
                            lobortis et dolor eget, sollicitudin luctus arcu.
                            Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
                    </div>
                    <div class="area-img3">
                    </div>
                </div>
                <div class="col-md-6 area-inner">
                    <div class="area-right p4">
                        <h5>HAIR CARE</h5>
                        <p class="para-w3-agile">Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa,
                            lobortis et dolor eget, sollicitudin luctus arcu.
                            Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
                    </div>
                    <div class="area-img4">
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection
