@extends('backend.master.master')
@section('main')
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title text-center">Advertise List</h5>
                <!-- Basic Modal -->
                @include('backend.layouts.errorAndSuccessMessage')
                <button type="button" class="btn btn-sm btn-primary my-4 float-end" data-bs-toggle="modal"
                    data-bs-target="#basicModal">
                    Add New Advertise
                </button>
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Advertise</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <!-- Vertical Form -->
                                    <form class="row g-3" action="{{ route('CreateAdvertise') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputNanme4" class="form-label">Advertise Heading</label>
                                            <input type="text" class="form-control" name="heading" id="inputNanme4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputNanme4" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" id="inputNanme4">
                                        </div>
                                        
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Detail</label>
                                            <input type="text" class="form-control" name="detail" id="inputAddress"
                                                placeholder="Add detail">
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form><!-- Vertical Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Basic Modal-->

                {{-- Table --}}

                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Title</th>
                            <th scope="col">detail</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allAdds as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ substr_replace($item->heading, '...', 20) }}</td>
                                {{-- <td><img style="width: 100px" src="{{ asset('backend/images/service/'.$item->image) }}" alt="" srcset=""></td> --}}
                                <td>{{ $item->title }}</td>
                                <td>{{ substr_replace($item->detail, '...', 20) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('editAdvertise',$item->id) }}" class="btn btn-sm me-2 btn-warning"><i class="bi bi-pencil-square"></i>
                                        </a>
                                      
                                            <a href="{{ route('deleteAdvertise',$item->id) }}" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i>
                                            </a>
                                        
                                        
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
