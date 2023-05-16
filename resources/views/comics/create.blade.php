@extends('layouts/main')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
    
        @csrf

        <div class="mb-2">
            <label for="title">title</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="mb-2">
            <label for="description">description</label>
            <input type="text" id="description" name="description">
        </div>
        <div class="mb-2">
            <label for="thumb">thumb</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <div class="mb-2">
            <label for="price">price</label>
            <input type="text" id="price" name="price">
        </div>
        <div class="mb-2">
            <label for="series">series</label>
            <input type="text" id="series" name="series">
        </div>
        <div class="mb-2">
            <label for="sale_date">sale_date</label>
            <input type="text" id="sale_date" name="sale_date">
        </div>
        <div class="mb-2">
            <label for="type">type</label>
            <input type="text" id="type" name="type">
        </div>
        <div class="mb-2">
            <label for="artists">artists</label>
            <input type="text" id="artists" name="artists">
        </div>
        <div class="mb-2">
            <label for="writers">writers</label>
            <input type="text" id="writers" name="writers">
        </div>
    
        <button type="submit">aggiungi</button>
    
    </form>
@endsection