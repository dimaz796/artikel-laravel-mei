@extends('layout.main')

@section('content')
    <h1>Haii Selamat Datang</h1>
    <p>{{ $nama }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $foto }}" alt="" class="img-thumbnail rounded-circle w-25">
@endsection