@extends('layouts.app')

@section('content')
<h1>Edit Blog</h1>
<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $blog->title }}" required>
    <label for="description">Description:</label>
    <textarea name="description" required>{{ $blog->description }}</textarea>
    <button type="submit">Update Blog</button>
</form>
@endsection