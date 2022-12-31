@extends('frontend.master.master')
@section('front_main')

<div class="banner-bottom">
    <div class="container">
        <div class="bs-docs-example">
            <h2>My Appointments</h2>
            @include('frontend.layouts.errorAndSuccessMessage')
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Service Name</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Payment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myAppointments as $key=>$item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->services->name }}</td>
                        <td>{{ $item->appointment_date }}</td>
                        <td>{{ $item->appointment_time }}</td>
                        <td>
                            @if ($item->payment_status == 'unpaid')
                            <p class="badge badge-danger">{{ $item->payment_status }}</p>
                            @else
                            <p class="badge badge-success">{{ $item->payment_status }}</p>
                            @endif
                        </td>
                        <td>
                            @if ($item->payment_status == 'unpaid')
                            <a href="{{ route('myAppointmentDelete',$item->id) }}" class="btn btn-danger btn-sm">Cancel</a>
                            @else
                            <p class="badge badge-primary">Done</p>
                            @endif
                           
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection