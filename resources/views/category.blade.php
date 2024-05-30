@extends('layout.main')


@section('content')
    <h1>Halaman Kategori : {{ $category }}</h1>
    @foreach ($posts as $item)
        <article class="mb-3 border border-2 rounded p-3">
            <h2><a href="/blog/{{ $item->slug }}">{{ $item->title }}</a></h2>
            <p>{{ $item->excerpt }}</p>
        </article>
    @endforeach
@endsection
