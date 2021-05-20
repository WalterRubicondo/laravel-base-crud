
@extends('layouts.app')

@section('main')
<main id="single">
    <div class="stripe">
          <div class="container">
              <button><a href="{{route('home')}}">Torna alla Home</a></button>
              <button><a href="{{route('comics.index')}}">Torna ai Fumetti</a></button>
          </div>
    </div>
    <div class="container pt-6 pb-6">
        <div class="left">
            <h2 class="pb-2">{{$comic->title}}</h2>
            <div class="description">
                <div class="green">
                    <div class="price">
                        <span>U.S. Price:</span> <span>${{$comic->price}}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="avaibility">
                        Check Availability <i class="fas fa-caret-down"></i>
                    </div>
                </div>
                <p class="pt-2">{{$comic->description}}</p>
            </div>
        </div>
        <div class="right">
            <img src="{{$comic->thumb}}" alt="Immagine Fumetto">   
        </div>
    </div>

    <div class="specific pt-3 pb-6">
        <div class="container">
            <div class="spec">
                <h4>Specs</h4>
                <div class="series">
                    <div class="col-20">
                        <span>Series:</span>
                    </div>
                    <div class="col-60">
                        <a href="">{{$comic->series}}</a>
                    </div>
                </div>
                <div class="price">
                    <div class="col-20">
                        <span>U.S. Price:</span>
                    </div>
                    <div class="col-60">
                        <span>${{$comic->price}}</span>
                    </div>
                </div>
                <div class="date">
                    <div class="col-20">
                        <span>On Sale Date:</span>
                    </div>
                    <div class="col-60">
                        <span>{{ date('M j, Y', strtotime($comic->sale_date))}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection