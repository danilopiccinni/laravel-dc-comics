@extends('layouts/main')

@section('content')

    <div class="container m-3">

        <form  action="{{route('comics.update' , $comic)}}" method="POST">
        
            @csrf
            @method('PUT')
    
            <div class="mb-2">
                <label for="title">title</label>
                <input type="text" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="mb-2">
                <label for="description">description</label>
                <input type="text" id="description" name="description" value="{{$comic->description}}">
            </div>
            <div class="mb-2">
                <label for="thumb">thumb</label>
                <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="mb-2">
                <label for="price">price</label>
                <input type="text" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="mb-2">
                <label for="series">series</label>
                <input type="text" id="series" name="series" value="{{$comic->series}}">
            </div>
            <div class="mb-2">
                <label for="sale_date">sale_date</label>
                <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-2">
                <label for="type">type</label>
                <input type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
            <div class="mb-2">
                <label for="artists">artists</label>
                <input type="text" id="artists" name="artists" value="{{implode(',',json_decode($comic->artists))}}"> <em>(separare gli artist con una virgola)</em>
            </div>
            <div class="mb-2">
                <label for="writers">writers</label>
                <input type="text" id="writers" name="writers" value="{{implode(',', json_decode($comic->writers))}}"> <em>(separare i writer con una virgola)</em>
            </div>
        
            <button type="submit">salva modifiche</button>
        
        </form>
    </div>

@endsection