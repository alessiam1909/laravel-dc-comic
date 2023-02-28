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
        <a href="{{route('comics.edit', ['comic' =>$single->id])}}" class="btn btn-sm btn-square btn-warning">
            <i class="fa-solid fa-pen"></i>
        </a>
        <a href="" class="btn btn-sm btn-square btn-danger">
            <i class="fa-solid fa-trash"></i>
        </a>
        <a href="{{route('comics.create')}}" class="btn btn-sm btn-square btn-success">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <div>
        <h4>ADVERTISEMENT</h4>
        <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv-img">
    </div>
</div>
@endsection