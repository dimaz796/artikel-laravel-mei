@extends('layout.main')

@section('content')
    <h2 class="mb-3">Create a New Post</h2>
    <form action="/artikel/tambah" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <textarea name="excerpt" id="excerpt" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select a Category</option>
                {{-- @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach --}}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
