@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">
    @foreach($book as $b)
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="rectangle" style="background-color:#808080">
                    <h2 style="color:#FFFFFF">Book Detail</h2>
                </div>
                
                <div class="container" style="border: 1px solid #808080">
                    <img src="{{ $b->image }}" class="card-img-top" alt="">
                    <h3 class="fw-bold pt-3">{{ $b->title }}</h3>
                    <h5>Author : {{ $b->author }}</h5>
                    <h5>Publisher : {{ $b->publisher_name }}</h5>
                    <h5>Year : {{ $b->year }}</h5>
                    <h5>Synopsis :</h5>
                    <h5> {{ $b->synopsis }}</h5>
                </div>

            </div>

            <div class="col-lg-3"></div>
        </div>
    </div>
    @endforeach

</div>
   
@endsection