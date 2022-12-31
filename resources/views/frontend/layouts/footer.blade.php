<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="f-bg-w3l">
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Contact <span>Information</span></h2>
                <ul class="con_inner_text">
                    <li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, <label>
                            New York City.</label></li>
                    <li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a
                            href="mailto:info@example.com">info@example.com</a></li>
                    <li><span class="fa fa-phone" aria-hidden="true"></span> +1234 567 567</li>
                </ul>

                <ul class="social_agileinfo">
                    <li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h2>Subscribe <span>Newsletter</span></h2>
                <p>By subscribing to our mailing list you will always get latest news from us.</p>
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                    <button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                    <div class="clearfix"> </div>
                </form>
            </div>
            <div class="col-md-4 w3layouts_footer_grid">
                <h3>Recent <span>Works</span></h3>
                <ul class="con_inner_text midimg">
                    <li><a href="#"><img src="{{ asset('frontend/images/p2.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p3.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p4.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p5.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p6.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p7.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p8.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                    <li><a href="#"><img src="{{ asset('frontend/images/p9.jpg') }}" alt=""
                                class="img-responsive" /></a>
                    </li>
                </ul>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <p class="copyright">© 2017 Beauty Salon. All Rights Reserved | Design by <a href="https://w3layouts.com/"
            target="_blank">w3layouts</a></p>
</div>
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
    </span></a>
<!-- //smooth scrolling -->
<script type='text/javascript' src='{{ asset('frontend/js/jquery-2.2.3.min.js') }}'></script>
<!-- start-smoth-scrolling -->


<script src="{{ asset('frontend/js/jarallax.js') }}"></script>

<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- flexSlider -->
<script defer src="{{ asset('frontend/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->

<!-- Owl-Carousel-JavaScript -->
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 2,
            lazyLoad: true,
            autoPlay: false,
            pagination: true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->
<script type="text/javascript" src="{{ asset('frontend/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- stats -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.countup.js') }}"></script>
<script src="{{ asset('backend/assets/dataTable/dataTable.min.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->

<!--js for bootstrap working-->
<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->

<script>
    setTimeout(function() {
        $('#alert').slideUp();
    }, 4000);
</script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
