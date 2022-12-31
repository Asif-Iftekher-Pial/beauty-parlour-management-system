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
                            <th scope="col">Mobile</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->message }}</td>
                                <td>
                                    @if ($item->status == 'replied')
                                        <span class="badge rounded-pill bg-success" style="font-size: 15px">{{ ucfirst($item->status) }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-warning" style="font-size: 15px">{{ ucfirst($item->status) }} </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        @if ($item->status == 'replied')
                                           
                                        @else
                                            <a href="{{  route('replyMessages',$item->id) }}"
                                                class="btn btn-primary btn-sm">Check</a>
                                        @endif
                                        {{-- <a href="{{ route('deleteService', $item->id) }}"
                                            onclick="alert('Are you sure want to delete?')"
                                            class="btn btn-danger btn-sm">Delete</a> --}}
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
