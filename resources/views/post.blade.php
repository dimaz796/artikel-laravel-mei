@extends('layout.main')

@section('content')
    <article class="mt-3">
        <h2>{{ $isi->title }}</h2>
        <h5 class="mt-3">By <a class="text-decoration-none" href="#">{{ $isi->user->name }}</a> In <a
                href="/categories/{{ $isi->category->slug }}" class="text-decoration-none">{{ $isi->category->name }}</a></h5>

        <p>{!! $isi->body !!}</p>
    </article>
    <a class="btn btn-light border-dark mt-3" href="/blog">back to blog</a>
@endsection
