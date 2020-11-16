@extends('places.layout')

@section('content')
    
    <!-- <div class="card-group"> -->
<div class="row justify-content-md-center"  style="background: #cde9f7" >

        
<!-- <div class="card"> -->
    <div class="card">
    
            <img src="{{ $city['url'] }}" class="card-img-top" alt="..." >
            
            <div class="card-body">
                <h5 class="card-title">{{ $city['name'] }}</h5>
                <p class="card-text">{{ $city['description']}}</p>
                <a href="/places/{{ $city['id'] }}" class="btn btn-primary">Expand</a>
            </div>
    </div>
<!-- </div> -->

@endsection


