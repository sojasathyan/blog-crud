@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome to your dashboard, {{ auth()->user()->name }}!</p>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create a New Blog</a>

</div>
@endsection