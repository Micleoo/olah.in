@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Video Lesson</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('video_lessons.update', $videoLesson->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $videoLesson->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control">{{ $videoLesson->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="video_link">Video Link:</label>
            <input type="url" name="video_link" class="form-control" value="{{ $videoLesson->video_link }}" required>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control" value="{{ $videoLesson->category }}">
        </div>
        <div class="form-group">
            <label for="published_at">Published At:</label>
            <input type="date" name="published_at" class="form-control" value="{{ $videoLesson->published_at }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
