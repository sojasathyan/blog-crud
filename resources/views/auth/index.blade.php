@extends('layouts.app')

@section('content')
<h1>Blogs</h1>
<ul>
    @foreach ($blogs as $blog)
    <li><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></li>
    @endforeach
</ul>
@endsection