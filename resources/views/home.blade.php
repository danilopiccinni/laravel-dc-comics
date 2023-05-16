@extends('layouts/main')


@section('content')

    <h1>Benvenuto nella home di DC Comics</h1>

    <ul>
        <li>
            <a href="{{route('home')}}">vai alla home</a>
        </li>

        <li>
            <a href="{{route('comics.index')}}">vai alla lista dei fumetti</a>
        </li>
    </ul>
@endsection