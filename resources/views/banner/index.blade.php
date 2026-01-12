@extends("admin.layout")
@section("content")
<div class="container mt-4">
    <h1 class="mb-4">Banner Management</h1>
    <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">Create New Banner</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $banner->title }}</td>
                <td>{{ $banner->subtitle }}</td>
                <td><img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" width="100"></td>
                <td>
                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
