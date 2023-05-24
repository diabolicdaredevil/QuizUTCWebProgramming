@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">
    <div class="container fluid pt-4">
        <div class="rectangle" style="background-color:#808080; color:#FFFFFF">
            <h5 class="fw-bold">{{ $pub->publisher_name }}</h5>
            <h5>Address - {{ $pub->address }}</h5>
            <h5>Phone - {{ $pub->phone }}</h5>
            <h5>Email - {{ $pub->email }}</h5>
        </div>
    </div>
    
    <div class="row">
        @foreach($book as $b)
            <div class="col-md-3 pb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $b->image }}" class="card-img-top">
                    <div class="card-body" style="height: 160px;">
                        <h5 class="card-title m-0">{{ $b->title }}</h5>
                        <p class="card-text p-0 m-0">by</p>
                        <h5 class="card-title p-0">{{ $b->author }}</h5>
                        <div class="mt-auto">
                            <a href="{{ route('detail', $b->id_book) }}" class="btn btn-primary" style="position: absolute; bottom: 8px;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
   
@endsection