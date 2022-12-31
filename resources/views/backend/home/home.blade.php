@extends('backend.master.master')
@section('main')
    <section class="section dashboard">
        @include('backend.layouts.errorAndSuccessMessage')
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Messages</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-envelope-exclamation"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ App\Models\Contact::count() }}</h6>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    {{-- <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>₱3,264</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card --> --}}

                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Services</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-list"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ App\Models\Service::count() }}</h6>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-4">

                        <div class="card info-card customers-card">

                            
                            <div class="card-body">
                                <h5 class="card-title">Total Customers <span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ App\Models\User::where('role','client')->count() }}</h6>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>

                </div><!-- End Customers Card -->
            </div>

        </div>
    </section>
@endsection
