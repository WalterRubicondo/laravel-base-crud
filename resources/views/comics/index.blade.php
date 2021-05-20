@extends('layouts.app')

@section('main')
<main id="home">
    <div class="current">
        CURRENT SERIES
    </div>
    <div class="container pt-5 pb-5">
    @foreach($comics as $comic) 
        <div class="card pb-4">
        <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                <div class="thumb">
                <img src="{{$comic->thumb}}" alt="Immagine Fumetto">
                </div>
                <h5 class="pt-2">{{$comic->series}}</h5>
            </a>
        </div>
        @endforeach
        <div class="button">
            <a href="{{route('home')}}">Torna alla Home</a>
        </div>
    </div>
</main>
@endsection