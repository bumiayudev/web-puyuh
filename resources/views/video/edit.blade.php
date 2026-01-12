@extends("admin.layout")
@section("content")
<div class="container mt-4">
    <h1 class="mb-4">Edit Video</h1>
    <form action="{{ route('video.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $video->title }}" required>
            @error("title")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="url">URL</label>&nbsp;<small class="badge badge-info">Hanya id youtube yang berbeda contoh id = dQw4w9WgXcQ maka yang dimasukkan di dalam url adalah https://www.youtube.com/embed/id-youtube</small>
            <input type="url" name="url" id="url" class="form-control" value="{{ $video->url }}" required>
            @error("url")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $video->description }}</textarea>
            @error("description")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Video</button>
    </form>
</div>
@endsection
