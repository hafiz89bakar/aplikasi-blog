<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [
            'posts' => $posts
    ]);
    }
    public function show($slug)
    {
         $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // input validation.
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'author_info' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255'
        ]);

        // store data ke database.
        Post::create($validatedData);

        // return back dengan mesej.
        return back()->with('success', 'Post created successfully!');

    }

    public function edit($slug) {

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'slug' => ['required','string','max:255', Rule::unique('posts','slug')->ignore($post->id)],
            'title' => ['required','string','max:255'],
            'content' => ['required','string'],
            'author' => ['required','string','max:255'],
            'author_info' => ['nullable','string','max:255'],
            'image' => ['nullable','string','max:255'],
            'category' => ['nullable','string','max:255'],
        ]);

        $post->update($validated);

        return redirect()->route('posts.index', $post->slug)
                        ->with('success', 'Post updated successfully!');
    }


}
