<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body>

    <!-- ======= Header ======= -->
   @include('backend.layouts.header')
    
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
   @include('backend.layouts.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('main')

    </main><!-- End #main -->

    @include('backend.layouts.footer')
</body>

</html>
