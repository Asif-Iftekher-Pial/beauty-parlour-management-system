@extends('backend.master.master')
@section('main')

<div class="col-xxl-4 col-xl-12">

    <div class="card info-card customers-card">
        <div class="card-body my-4">
            
            <h3 class="text-center">Update Service</h3>
            <div class="col-lg-12">
                <!-- Vertical Form -->
                <form class="row g-3" action="{{ route('services.update',$service->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Service Name</label>
                        <input type="text" class="form-control" name="name"  value="{{ $service->name }}" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" value="{{ $service->price }}" id="inputEmail4">
                    </div>
                    
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" value="{{ $service->description }}" id="inputAddress"
                            placeholder="Service description">
                    </div>
                    <div class="col-12">
                        <img style="width: 100px" src="{{ asset('backend/images/service/'.$service->image) }}" alt="" srcset="">
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
    
@endsection