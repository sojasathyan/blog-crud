@extends('layouts.app')

@section('content')
    <h1>Create Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <button type="submit">Create Blog</button>
    </form>
@endsection
