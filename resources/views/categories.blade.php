@extends('layout.main')


@section('content')
    <h1>Halaman Kategori </h1>
    <a href="{{ route('tambah_category') }}"" class="text-decoration-none">Tambah Kategori</a>


    @foreach ($categories as $category)
        <ul>
            <li>

                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
