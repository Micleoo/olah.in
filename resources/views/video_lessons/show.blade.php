@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $videoLesson->title }}</h1>
    <p>{{ $videoLesson->description }}</p>
    <iframe width="560" height="315" src="{{ $videoLesson->video_link }}" frameborder="0" allowfullscreen></iframe>
    <p>Category: {{ $videoLesson->category }}</p>
    <p>Published At: {{ $videoLesson->published_at }}</p>
</div>
@endsection
