@extends('layouts.app')

@section('content')
<div class="blue-ctn">
</div>
<div class="containeer">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"> Modifica fumetto {{$comic->title}}: </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ( $errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.update', $comic->id)}}" method="POST" class="mt-5">
                @csrf
                @method('PUT')
                <div class="mb-3 form-group">
                    <label for="title" class="control-label">Titolo: </label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto" value="{{old('title') ?? $comic->title}}">
                </div>
                @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="description" class="control-label">Descrizione: </label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" value="{{old('description') ?? $comic->description}}">
                </div>
                @error('description')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="thumb" class="control-label">Immagine: </label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci il path dell'immagine" value="{{old('thumb') ?? $comic->thumb}}">
                </div>
                @error('thumb')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="price" class="control-label">Prezzo: </label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto" value="{{old('price') ?? $comic->price}}">
                </div>
                @error('price')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="series" class="control-label">Serie: </label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{old('series') ?? $comic->series}}">
                </div>
                @error('series')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="sale_date" class="control-label">Data sconto: </label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di sconto del fumetto" value="{{old('sales_date') ?? $comic->sales_date}}">
                </div>
                @error('sale_date')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <div class="mb-3 form-group">
                    <label for="type" class="control-label">Tipo: </label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto" value="{{old('type') ?? $comic->type}}">
                </div>
                @error('type')
                <div class="text-danger">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-success my-3">
                    Salva
                </button>
            </form>
        </div>
    </div>
</div>

@endsection