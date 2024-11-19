<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = session('blogs', []);
        return view('dashboard', compact('blogs'));
    }

    public function create()
    {
        return view('blog');
    }

    public function store(Request $request)
    {
        $blogs = session('blogs', []);
        $blogs[] = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        session(['blogs' => $blogs]);

        return redirect()->route('dashboard')->with('success', 'Blog created successfully.');
    }

    public function delete($index)
    {
        $blogs = session('blogs', []);
        unset($blogs[$index]);
        session(['blogs' => $blogs]);

        return redirect()->route('dashboard')->with('success', 'Blog deleted successfully.');
    }
}