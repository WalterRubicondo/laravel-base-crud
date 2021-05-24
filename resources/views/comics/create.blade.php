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
            <form action="{{route('comics.store')}}" method='post'>
                @csrf
                @method('POST')
                <input type="text" name="title" value="" placeholder="Title">
                <textarea name="description" placeholder="Description" cols="30" rows="5"></textarea>
                <input type="text" name="thumb" value="" placeholder="Img Link">
                <input type="number" name="price" value="" placeholder="Price">
                <input type="text" name="series" value="" placeholder="Series">
                <input type="date" name="sale_date" value="" placeholder="Sale Date">
                <input type="text" name="type" value="" placeholder="Type">
                <input type="submit" name="" value="Send">
            </form>
        </div>
    </main>
@endsection