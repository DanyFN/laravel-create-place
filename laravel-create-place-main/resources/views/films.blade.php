@extends('layouts.app')

@section('main_content')
  <h2>Sono la pagina films</h2>


    @foreach ($data_film as $film)
      <ul>
        <li>TITOLO: {{ $film['titolo'] }}</li>
        <li>ANNO: {{ $film['anno'] }}</li>
        <li>AUTORE: {{ $film['autore'] }}</li>
      </ul>
    @endforeach


@endsection
