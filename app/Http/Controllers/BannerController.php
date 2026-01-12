<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function index()
    {
        $banners = DB::table('banners')->paginate(10);
        return view('banner.index', compact('banners'));
    }
    public function create()
    {
        return view('banner.create');
    }
    public function store(Request $request)
    {
        // Validate and store the banner
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'required|image',
        ]);

        // Logic to store banner in database
        DB::table('banners')->insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $request->file('image')->store('banners', 'public'),
        ]);
        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }
    public function edit($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();
        return view('banner.edit', compact('banner'));
    }
    public function update(Request $request, $id)
    {
        // Validate and update the banner
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image',
        ]);

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        DB::table('banners')->where('id', $id)->update($data);
        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }
    public function destroy($id)
    {
        DB::table('banners')->where('id', $id)->delete();
        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}
