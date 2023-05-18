@extends('layouts/main')

@section('content')

    <div class="container m-3">

        <form  action="{{route('comics.update' , $comic)}}" method="POST">
        
            @csrf
            @method('PUT')
    
            <div class="mb-2">
                <label class="col-1" for="title">Title:</label>
                <input class=" col-4 @error('title') animate__animated animate__shakeX @enderror" style="@error('title') border : 2px solid red @enderror " type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
                @error('title')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2 d-flex gap-1 align-items-center">
                <label class="col-1" for="description">Description:</label>
                <textarea class=" col-4 @error('description') animate__animated animate__shakeX @enderror" style="@error('description') border : 2px solid red @enderror " type="text" id="description" name="description" >{{old('description') ?? $comic->description}}</textarea>
                @error('description')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="thumb">Image link:</label>
                <input class=" col-4 @error('thumb') animate__animated animate__shakeX @enderror" style="@error('thumb') border : 2px solid red @enderror " type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
                @error('thumb')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="price">Price:</label>
                <input class=" col-4 @error('price') animate__animated animate__shakeX @enderror" style="@error('price') border : 2px solid red @enderror " type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">
                @error('price')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="series">Series:</label>
                <input class=" col-4 @error('series') animate__animated animate__shakeX @enderror" style="@error('series') border : 2px solid red @enderror " type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
                @error('series')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="sale_date">Sale date:</label>
                <input class=" col-4 @error('sale_date') animate__animated animate__shakeX @enderror" style="@error('sale_date') border : 2px solid red @enderror " type="text" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
                @error('sale_date')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="type">Type:</label>
                <input class=" col-4 @error('type') animate__animated animate__shakeX @enderror" style="@error('type') border : 2px solid red @enderror " type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
                @error('type')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="artists">Artists:</label>
                <input class=" col-4 @error('artists') animate__animated animate__shakeX @enderror" style="@error('artists') border : 2px solid red @enderror " type="text" id="artists" name="artists" value="{{old('artists') ?? implode(',',json_decode($comic->artists))}}"> <em>(separare gli artist con una virgola)</em>
                @error('artists')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            
            </div>
            <div class="mb-2">
                <label class="col-1" for="writers">Writers:</label>
                <input class=" col-4 @error('writers') animate__animated animate__shakeX @enderror" style="@error('writers') border : 2px solid red @enderror " type="text" id="writers" name="writers" value="{{old('writers') ??implode(',', json_decode($comic->writers))}}"> <em>(separare i writer con una virgola)</em>
                @error('writers')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            
            </div>
            <button type="submit">salva modifiche</button>
        
        </form>
    </div>

@endsection