@extends('layouts.app')

@section('content')
<div class="blue-ctn">
    <div class="ctn-img">
        <img src="{{$single['thumb']}}" alt="img-fumetto">
    </div>
</div>
<div class="container-single d-flex">
    <div>
        <h2>{{$single['title']}}</h2>
        <p>Price: {{$single['price']}}</p>
        <p>Description: {{$single['description']}} </p>
    </div>
    <div>
        <h4>ADVERTISEMENT</h4>
        <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv-img">
    </div>
</div>
@endsection