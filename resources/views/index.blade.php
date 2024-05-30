@extends('layout.main')

@section('content')
    <h2>Selamat Datang di Article</h2>
    {{-- <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form> --}}

    <a href="/artikel">Tambah Artikel</a>
@endsection
