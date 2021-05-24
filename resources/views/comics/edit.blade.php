@extends('layouts.app')

@section('main')
    <main id="form">

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container pt-6 pb-6">
            <form action="{{route('comics.update', ['comic' => $comic->id])}}" method='post'>
                @csrf
                @method('PATCH')
                <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
                <textarea name="description" placeholder="Description" cols="30" rows="5">{{$comic->description}}</textarea>
                <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Img Link">
                <input type="number" name="price" value="{{$comic->price}}" placeholder="Price">
                <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">
                <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale Date">
                <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">
                <input type="submit" name="" value="Send">
            </form>    
        </div>
    </main>
@endsection