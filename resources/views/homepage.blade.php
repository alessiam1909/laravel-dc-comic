@extends('layouts.app')


@section('content')

<main class="bg-cards">
    <div class="container-cards">
        <div class="row-fumetti">
           <div>
                <h2 class="m-3 text-light">Da qui puoi visualizzare i fumetti oppure aggiungerne uno:</h2>
                <button class="load-button m-4"><a href="{{route('comics.index')}}" class="text-light"> Visualizza fumetti</a></button>
                <button class="load-button m-4"><a href="{{route('comics.create')}}" class="text-light"> Aggiungi fumetto</a></button>
           </div>
        </div>
    </div>

</main>
@endsection