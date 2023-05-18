@extends('layouts/main')

@section('content')

    <div class="container m-3">

        <form  action="{{route('comics.update' , $comic)}}" method="POST">
        
            @csrf
            @method('PUT')
    
            <div class="mb-2">
                <label for="title">title</label>
                <input style= "@error('title') border : 2px solid red @enderror " type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
            </div>
            @error('title')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="description">description</label>
                <input style= "@error('description') border : 2px solid red @enderror " type="text" id="description" name="description" value="{{old('description') ?? $comic->description}}">
            </div>
            @error('description')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="thumb">thumb</label>
                <input style= "@error('thumb') border : 2px solid red @enderror " type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
            </div>
            @error('thumb')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="price">price</label>
                <input style= "@error('price') border : 2px solid red @enderror " type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">
            </div>
            @error('price')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="series">series</label>
                <input style= "@error('series') border : 2px solid red @enderror " type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
            </div>
            @error('series')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="sale_date">sale_date</label>
                <input style= "@error('sale_date') border : 2px solid red @enderror " type="text" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
            </div>
            @error('sale_date')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="type">type</label>
                <input style= "@error('type') border : 2px solid red @enderror " type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
            </div>
            @error('type')
                <em style="color:red"> {{$message}} </em>
            @enderror

            <div class="mb-2">
                <label for="artists">artists</label>
                <input style= "@error('artists') border : 2px solid red @enderror " type="text" id="artists" name="artists" value="{{old('artists') ?? implode(',',json_decode($comic->artists))}}"> <em>(separare gli artist con una virgola)</em>
            </div>
            @error('artists')
                <em style="color:red"> {{$message}} </em>
            @enderror
        
            <div class="mb-2">
                <label for="writers">writers</label>
                <input style= "@error('writers') border : 2px solid red @enderror " type="text" id="writers" name="writers" value="{{old('writers') ??implode(',', json_decode($comic->writers))}}"> <em>(separare i writer con una virgola)</em>
            </div>
            @error('writers')
                <em style="color:red"> {{$message}} </em>
            @enderror
        
            <button type="submit">salva modifiche</button>
        
        </form>
    </div>

@endsection