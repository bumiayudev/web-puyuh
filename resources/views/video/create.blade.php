@extends("admin.layout")
@section("content")
<div class="container mt-4">
    <h1 class="mb-4">Create New Video</h1>
    <form action="{{ route('video.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Contoh: Vidio pengiriman...">
            @error("title")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="url">URL</label>&nbsp;<small class="badge badge-info">Hanya id youtube yang berbeda contoh id = dQw4w9WgXcQ maka yang dimasukkan di dalam url adalah https://www.youtube.com/embed/id-youtube</small>
            <input type="url" name="url" id="url" class="form-control" placeholder="Contoh: https://www.youtube.com/embed/dQw4w9WgXcQ...">
            @error("url")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Deskripsi singkat tentang video..."></textarea>
            @error("description")
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Video</button>
    </form>
</div>
@endsection
