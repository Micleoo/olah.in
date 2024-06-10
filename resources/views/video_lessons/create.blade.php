@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Video Lesson</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('video_lessons.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="video_link">Video Link:</label>
            <input type="url" name="video_link" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control">
        </div>
        <div class="form-group">
            <label for="published_at">Published At:</label>
            <input type="date" name="published_at" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
