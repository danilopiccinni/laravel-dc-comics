@extends('layouts/main')

@section('content')

@include('partials/jumbotron')

<div class="container">
    <div class="card mb-3" style="max-width: 80%;">
        <div class="row g-0">

          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $comic->title }}</h5>
              <p class="card-text">{{ $comic->description }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
</div>

<div>
    <div class="container">
        <div>
            <table>
                <thead>
                    <th>Talent</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Art by:</td>
                        <td>
                            @foreach(json_decode($comic->artists , true) as $singleArtist)

                            <a href="">{{$singleArtist}}</a>
                            {{-- {{ implode(',', json_decode($comic->writers , true))}}  --}}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>Written by:</td>
                        <td>
                            @foreach(json_decode($comic->writers , true) as $singleWriter)

                            <a href="">{{$singleWriter}}</a>  
                            {{-- {{ implode(',', json_decode($comic->writers , true))}}  --}}
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table>
                <thead>
                    <th>Specs</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Series:</td>
                        <td> {{ $comic->series}} </td>
                    </tr>
                    <tr>
                        <td>U.S. Price:</td>
                        <td>{{ $comic->price }}</td>
                    </tr>
                    <tr>
                        <td>On Sale Date:</td>
                        <td>{{ $comic->sale_date }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection