@extends('backend.master.master')
@section('main')
    <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
            <div class="card-body">
                <h5 class="card-title text-center">About US</h5>
                <!-- Basic Modal -->
                @include('backend.layouts.errorAndSuccessMessage')
                
                {{-- <a href="{{ route('about-us.edit',$aboutUs->id) }}" class="btn btn-sm btn-primary my-4 float-end" >Edit ABout Us</a> --}}
                <div class="col-lg-12">
                <form class="row g-3" action="{{ route('about-us.update',$aboutUs->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading"  value="{{ $aboutUs->heading }}" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $aboutUs->title }}" id="inputEmail4">
                    </div>
                    
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" value="{{ $aboutUs->detail }}" id="inputAddress"
                            placeholder="Detail description">
                    </div>
                    <div class="col-12">
                        <img style="width: 100px" src="{{ asset('backend/images/aboutus/'.$aboutUs->image) }}" alt="" srcset="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
                </div>
                

            </div>
        </div>

    </div>
@endsection
