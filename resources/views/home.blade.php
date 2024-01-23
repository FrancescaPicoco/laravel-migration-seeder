@extends('layouts.app')

@section('content')
<h1 class="text-center">TRENI:</h1>
<div class="cardContainer d-flex flex-wrap container-sm m-auto">
    @foreach ($trains as $train)
    <div class="card">
        <h3>{{$train->Stazione di partenza}}</h3>
        <h3>{{$train->Stazione di arrivo}}</h3>
        <div class="card-body">
          {{-- <p class="card-text">{{$film->description}}</p> --}}
        </div>
    </div>
    @endforeach
</div>   
@endsection