@extends('backend.master.master')
@section('main')
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title text-center">Appointment List</h5>
                <!-- Basic Modal -->
                @include('backend.layouts.errorAndSuccessMessage')

                {{-- Table --}}

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Clients Name</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->clients->name }}</td>
                                <td>{{ $item->services->name }}</td>
                                <td>{{ $item->services->price }}</td>
                                <td>{{ $item->appointment_date }}</td>
                                <td>{{ $item->appointment_time }}</td>
                                <td>
                                    @if ($item->payment_status == 'unpaid')
                                        <span class="badge rounded-pill bg-danger">{{ $item->payment_status }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-success">{{ $item->payment_status }} </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        @if ($item->payment_status == 'paid')
                                            <span class="badge rounded-pill bg-warning text-dark pt-2">Delivered</span>
                                        @else
                                            <a href="{{ route('confirmService', $item->id) }}"
                                                class="btn btn-primary btn-sm">Confirm</a>
                                        @endif
                                        <a href="{{ route('deleteService', $item->id) }}"
                                            onclick="alert('Are you sure want to delete?')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
