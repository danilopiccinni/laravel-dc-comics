@extends('layouts/main')

@section('content')

    <div class="container m-3 ">

        <form  action="{{route('comics.store')}}" method="POST">
        
            @csrf
    
            <div class="mb-2">
                <label class="col-1" for="title">Title:</label>
                <input class=" col-4 @error('title') animate__animated animate__shakeX @enderror" style= "@error('title') border : 1px solid red @enderror " type="text" id="title" name="title" value="{{old('title')}}">
                @error('title')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2 d-flex gap-1 align-items-center">
                <label class="col-1" for="description">Description:</label>
                <textarea class=" col-4 @error('description') animate__animated animate__shakeX @enderror" style= "@error('description') border : 1px solid red @enderror " type="text" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="thumb">Image link:</label>
                <input class=" col-4 @error('thumb') animate__animated animate__shakeX @enderror" style= "@error('thumb') border : 1px solid red @enderror " type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="price">Price:</label>
                <input class=" col-4 @error('price') animate__animated animate__shakeX @enderror" style= "@error('price') border : 1px solid red @enderror " type="text" id="price" name="price" value="{{old('price')}}">
                @error('price')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="series">Series:</label>
                <input class="col-4 @error('series') animate__animated animate__shakeX @enderror" style= "@error('series') border : 1px solid red @enderror " type="text" id="series" name="series" value="{{old('series')}}">
                @error('series')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="sale_date">Sale date:</label>
                <input class="col-4 @error('sale_date') animate__animated animate__shakeX @enderror" style= "@error('sale_date') border : 1px solid red @enderror " type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="type">Type:</label>
                <input class="col-4 @error('type') animate__animated animate__shakeX @enderror" style= "@error('type') border : 1px solid red @enderror " type="text" id="type" name="type" value="{{old('type')}}">
                @error('type')
                    <em style="color:red"> {{$message}} </em>
                @enderror
            </div>

            <div class="mb-2">
                <label class="col-1" for="artists">Artists:</label>
                <input class="col-4 @error('artists') animate__animated animate__shakeX @enderror" style= "@error('artists') border : 1px solid red @enderror " type="text" id="artists" name="artists" value="{{old('artists')}}">
                @error('artists')
                    <em style="color:red"> {{$message}} </em>
                @enderror
                <em>(separare gli artist con una virgola)</em>
            </div>

            <div class="mb-2">
                <label class="col-1" for="writers">Writers:</label>
                <input class="col-4 @error('writers') animate__animated animate__shakeX @enderror" style= "@error('writers') border : 1px solid red @enderror " type="text" id="writers" name="writers" value="{{old('writers')}}"> 
                @error('writers')
                    <em style="color:red"> {{$message}} </em>
                @enderror
                <em>(separare i writer con una virgola)</em>
            </div>

        
            <button type="submit">aggiungi</button>
        
        </form>
    </div>

@endsection