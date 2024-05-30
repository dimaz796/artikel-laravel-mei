@extends('layout.main')

@section('content')
    <h2 class="mb-3">Create a New Category</h2>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
