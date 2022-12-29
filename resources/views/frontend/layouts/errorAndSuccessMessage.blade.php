@if (session()->has('message'))
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
    {{ session()->get('message') }}
</div> --}}

<div class="alert alert-success" role="alert" id="alert" style="margin-bottom: 0">
    <strong>Well done!</strong>{{ session()->get('message') }}
   {{-- <strong>{{ session()->get('message') }}</strong>  --}}
</div>
@endif

@if (session()->has('error'))
{{-- <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
    {{ session()->get('error') }}
</div> --}}
<div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong>{{ session()->get('error') }}
</div>
@endif
{{--  validation error message --}}
@if ($errors->any())
<div class="alert alert-danger" id="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif