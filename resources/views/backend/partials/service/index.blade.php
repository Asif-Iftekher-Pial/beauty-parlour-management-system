@extends('backend.master.master')
@section('main')
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title text-center">Service List</h5>
                <!-- Basic Modal -->
                @include('backend.layouts.errorAndSuccessMessage')
                <button type="button" class="btn btn-sm btn-primary my-4 float-end" data-bs-toggle="modal"
                    data-bs-target="#basicModal">
                    Add New Service
                </button>
                <div class="modal fade" id="basicModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <!-- Vertical Form -->
                                    <form class="row g-3" action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label for="inputNanme4" class="form-label">Service Name</label>
                                            <input type="text" class="form-control" name="name" id="inputNanme4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmail4" class="form-label">Price</label>
                                            <input type="number" name="price" class="form-control" id="inputEmail4">
                                        </div>
                                        
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description" id="inputAddress"
                                                placeholder="Service description">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Upload Image</label>
                                            <input class="form-control" type="file" name="image" id="formFile">
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
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ substr_replace($item->name, '...', 20) }}</td>
                                <td><img style="width: 100px" src="{{ asset('backend/images/service/'.$item->image) }}" alt="" srcset=""></td>
                                <td>{{ $item->price }}</td>
                                <td>{{ substr_replace($item->description, '...', 20) }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('services.edit',$item->id) }}" class="btn btn-sm me-2 btn-warning"><i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('services.destroy',$item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                        
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
