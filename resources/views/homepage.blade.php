@extends('layouts.app')


@section('content')

<main class="bg-cards">
    <div class="container-cards">
        <div class="row-fumetti">
           <div>
                <h2>Da qui puoi visualizzare i fumetti oppure aggiungerne uno</h2>
                <button><a href="{{route('comics.index')}}"> Visualizza fumetti</a></button>
                <button><a href="{{route('comics.create')}}"> Aggiungi fumetto</a></button>
           </div>
        </div>
        <button class="load-button">LOAD MORE</button>
    </div>

</main>
@endsection