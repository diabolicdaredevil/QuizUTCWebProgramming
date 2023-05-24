@extends('layout/layout')

@section('contents')
<div class="container flex-grow-1">
    @foreach($pub as $p)
        <a href="{{ route('publisherdetail', ['id' => $p->id]) }}" style="text-decoration:none">
            <div class="container fluid pt-4">
                <div class="rectangle" style="background-color:#808080; color:#FFFFFF">
                    <h5 class="fw-bold">{{ $p->publisher_name }}</h5>
                    <h5>Address - {{ $p->address }}</h5>
                    <h5>Phone - {{ $p->phone }}</h5>
                    <h5>Email - {{ $p->email }}</h5>
                </div>
            </div>
        </a>
    @endforeach
</div>
   
@endsection