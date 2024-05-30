@extends('layout.main')


@section('content')
    <h1>Halaman Blog</h1>
    <a href="/artikel/tambah">Tambah Artikel</a>

    @foreach ($posts as $item)
        <article class="mb-3 border border-2 rounded p-3">
            <h2><a href="/blog/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a></h2>

            <h5>By <a class="text-decoration-none" href="#">{{ $item->user->name }}</a> In <a
                    class="text-decoration-none"
                    href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a>
            </h5>

            <p>{{ $item->excerpt }}</p>

            <a href="/blog/{{ $item->slug }}" class="text-decoration-none">Read More..</a>

        </article>
    @endforeach
@endsection
