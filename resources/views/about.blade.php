@extends('layout.main')

@section('container')
    <H1>About</H1>
    <h5>{{ $nama }}</h2>
    <h5>{{ $email }}</h2>
    <img src="img/{{ $foto }}" alt="{{ $nama }}" width="200px" height="200px" class="img-thumbnail rounded-circle">
@endsection

