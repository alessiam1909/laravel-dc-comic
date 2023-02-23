@extends('layouts.app')


@section('content')

<main class="bg-cards">
    <div class="current-button">CURRENT SERIES</div>
    <div class="container-cards">
        <div class="row-fumetti">
            @foreach ($fumetti as $fumetto)
                <div class="col-fumetto">
                    <a href="{{ route('details_fumetto', ['slug' => $fumetto['slug']]) }}">
                        <div class="contenitore-img">
                            <img class="img-fumetto" src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                        </div>
                        <h3 class="title">{{$fumetto['title']}}</h3>
                    </a>
                </div> 
            @endforeach
        </div>
        <button class="load-button">LOAD MORE</button>
    </div>

</main>
@endsection