<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body>
    {{-- <header>
        <div class="container">
            <div class="header-bottom-agileits">
                <div class="w3-logo">
                    <h1><a href="index.html">Aesthetic Clinic</a></h1>
                </div>
                <div class="address">
                    <p>4th block,New York City.</p>
                    <p class="para-y"><a href="about.html">Get more info</a></p>
                </div>
                <div class="nav-contact-w3ls">
                    <p>+0 111 222 333<span class="fa fa-phone" aria-hidden="true"></span></p>
                    <p class="para-y"><a href="mailto:info@example.com">info@example.com</a><span
                            class="fa fa-envelope-o" aria-hidden="true"></span></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header> --}}
    <!-- navigation -->
    @include('frontend.layouts.navbar')
    <!-- //navigation -->
    @yield('front_main')
    @include('frontend.layouts.footer')
</body>

</html>
