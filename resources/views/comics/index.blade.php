@extends('layouts/main')

@section('content')
<div class="general-container">

    @include('partials/jumbotron')

           
        <div class="cont-comic-books">

            <button class="current-series-button">current series</button>

            @foreach ($comics as $key => $comic)
            <a href="{{ route('comics.show', $comic) }}" class="poster">
                <img src="{{$comic['thumb'] }}" alt="" class="image-comic-book">
                <span class="title-comic-book">{{ $comic['title'] }}</span>
            </a>
            @endforeach

        </div>

        <a style="color:black" href="{{route('comics.create')}}" class="load-more-button">load more</a>
  
    </div>
    
    <div class="buy">
        @include('partials/buy')
    </div>

@endsection