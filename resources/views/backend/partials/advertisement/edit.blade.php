@extends('backend.master.master')
@section('main')

<div class="col-xxl-4 col-xl-12">

    <div class="card info-card customers-card">
        <div class="card-body my-4">
            
            <h3 class="text-center">Update Advertise</h3>
            <div class="col-lg-12">
                <!-- Vertical Form -->
                <form class="row g-3" action="{{ route('UpdateAdvertise',$data->id) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Advertise Heading</label>
                        <input type="text" class="form-control" name="heading" value="{{ $data->heading }}" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $data->title }}" id="inputNanme4">
                    </div>
                    
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" value="{{ $data->detail }}" id="inputAddress"
                            placeholder="Update detail">
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->
            </div>
        </div>
    </div>
</div>
    
@endsection