@extends('layouts/main')

@section('content')

@include('partials/jumbotron')

<div class="banner-blue">
    <div class="container">
        <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="...">
    </div>
</div>

<div class="container">
    <div class="card mb-3 border border-0" >
        <div class="row g-0 d-flex align-items-center">

          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <div class="container banner-card-verde d-flex justify-content-between align-items-center">
                    <div>
                        U.S. Price: {{ $comic->price }}
                    </div>
                    <div class="d-flex gap-4" >
                        <span class="">Aviable</span> <span>Check Aviability </span>
                    </div>
                </div>
              <p class="card-text">{{ $comic->description }}</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="text-center">Advertisement</div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
    </div>
    <div>
        <div class="container d-flex gap-3">
            <div class="col-6">
                <table class="table">
                    <thead>
                        <th class="border border-0">Talent</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th >Art by:</th>
                            <td >
                                @foreach(json_decode($comic->artists , true) as $singleArtist)
    
                                <a href="">{{$singleArtist}}</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Written by:</td>
                            <td>
                                @foreach(json_decode($comic->writers , true) as $singleWriter)
    
                                <a href="">{{$singleWriter}}</a>  
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 ">
                <table class="table">
                    <thead>
                        <th class="border border-0">Specs</th>
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
</div>

<a class="btn btn-primary" href="{{route('comics.edit' , $comic)}}">modifica</a>

{{-- <form action="{{route('comics.destroy' , $comic)}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" >Elimina</button>

</form> --}}
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ELIMINA
    </button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Vuoi davvero eliminare il comic selezionato?
          ATTENZIONE: questa operazione è irreversibile
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
          <form action="{{route('comics.destroy' , $comic)}}" method="POST">
            @csrf
            @method('DELETE')
        
            <button type="submit" class="btn btn-primary">Elimina</button>
        
        </form>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <hr>

<ul>
    <li>
        <a href="{{route('home')}}">vai alla home</a>
    </li>

    <li>
        <a href="{{route('comics.index')}}">vai alla lista dei fumetti</a>
    </li>
</ul>




@endsection