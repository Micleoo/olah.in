<?php

namespace App\Http\Controllers;

use App\Models\VideoLesson;
use Illuminate\Http\Request;

class VideoLessonController extends Controller
{
    public function index()
    {
        $videoLessons = VideoLesson::all();
        return view('video_lessons.index', compact('videoLessons'));
    }

    public function create()
    {
        return view('video_lessons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required|url',
        ]);

        VideoLesson::create($request->all());

        return redirect()->route('video_lessons.index')->with('success', 'Video lesson created successfully.');
    }

    public function show(VideoLesson $videoLesson)
    {
        return view('video_lessons.show', compact('videoLesson'));
    }

    public function edit(VideoLesson $videoLesson)
    {
        return view('video_lessons.edit', compact('videoLesson'));
    }

    public function update(Request $request, VideoLesson $videoLesson)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required|url',
        ]);

        $videoLesson->update($request->all());

        return redirect()->route('video_lessons.index')->with('success', 'Video lesson updated successfully.');
    }

    public function destroy(VideoLesson $videoLesson)
    {
        $videoLesson->delete();

        return redirect()->route('video_lessons.index')->with('success', 'Video lesson deleted successfully.');
    }
}
