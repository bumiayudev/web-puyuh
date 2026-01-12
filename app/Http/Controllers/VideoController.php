<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')->paginate(10); // Fetch videos from database or storage as needed
        return view('video.index', compact('videos'));
    }
    public function create()
    {
        return view('video.create');
    }
    public function store(Request $request)
    {
        // Validate and store the video
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);
        DB::table('videos')->insert([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
        ]);
        return redirect()->route('video.index')->with('success', 'Video added successfully.');
    }
    public function edit($id)
    {
        $video = DB::table('videos')->where('id', $id)->first();
        return view('video.edit', compact('video'));
    }
    public function update(Request $request, $id)
    {
        // Validate and update the video
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'description' => 'nullable|string',
        ]);
        DB::table('videos')->where('id', $id)->update([
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
        ]);
        return redirect()->route('video.index')->with('success', 'Video updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('videos')->where('id', $id)->delete();
        return redirect()->route('video.index')->with('success', 'Video deleted successfully.');
    }
}
