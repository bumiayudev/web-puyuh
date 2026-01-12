@extends("admin.layout")
@section("content")
<div class="container mt-4">
    <h1 class="mb-4">Video Management</h1>
    <a href="{{ route('video.create') }}" class="btn btn-primary mb-3">Add New Video</a>
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
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $video->title }}</td>
                <td><a href="{{ $video->url }}" target="_blank">{{ $video->url }}</a></td>
                <td>
                    <a href="{{ route('video.edit', $video->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('video.destroy', $video->id) }}" method="POST" style="display:inline-block;">
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
