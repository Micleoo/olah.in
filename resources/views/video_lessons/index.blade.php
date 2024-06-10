@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Video Lessons</h1>
    <a href="{{ route('video_lessons.create') }}" class="btn btn-primary">Add New Video Lesson</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Published At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videoLessons as $videoLesson)
            <tr>
                <td>{{ $videoLesson->title }}</td>
                <td>{{ $videoLesson->description }}</td>
                <td>{{ $videoLesson->category }}</td>
                <td>{{ $videoLesson->published_at }}</td>
                <td>
                    <a href="{{ route('video_lessons.show', $videoLesson->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('video_lessons.edit', $videoLesson->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('video_lessons.destroy', $videoLesson->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
