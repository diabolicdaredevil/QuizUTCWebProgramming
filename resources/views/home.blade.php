@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">

    <div class="container">
        <div class="row">
            @foreach($book as $b)
            <div class="col-md-3 pb-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $b['image'] }}" class="card-img-top" >
                    <div class="card-body" style="height:180px;">
                        <h5 class="card-title m-0">{{ $b['title'] }}</h5>
                        <p class="card-text p-0 m-0">by</p>
                        <h5 class="card-title p-0">{{ $b['author'] }}</h5>
                        <div class="mt-auto">
                            <a href="{{ route('detail', $b->id) }}" class="btn btn-primary" style="position: absolute; bottom: 8px;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
   
@endsection