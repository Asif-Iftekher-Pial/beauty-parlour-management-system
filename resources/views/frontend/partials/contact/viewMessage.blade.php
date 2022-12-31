@extends('frontend.master.master')
@section('front_main')

<div class="banner-bottom">
    <div class="container">
        <div class="bs-docs-example">
            <h2>My Messages</h2>
            @include('frontend.layouts.errorAndSuccessMessage')
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactList as $key=>$item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->message }}</td>
                        <td>{{ $item->created_at }}</td>
                        
                        <td>
                           <a href="{{ route('deleteContact',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection