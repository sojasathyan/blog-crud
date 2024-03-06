@extends('layouts.app')

@section('content')
<h1>{{ $blog->title }}</h1>
<p>{{ $blog->description }}</p>
<a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
<form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection