<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate ([
            
            'postTitle' => 'required|max:255',
            'postContent' => 'required|max:255',
            'postCategory' => 'required|max:255',
        ]);

        //return "You have passed the validation checks!";

        $a = new Post;
        $a->postTitle = $validatedData['postTitle'];
        $a->postContent = $validatedData['postContent'];
        $a->postCategory = $validatedData['postCategory'];

        $a->user_id = auth()->id();

        $a->save();

        session()->flash('message', 'Congratulations! New post was created!!');
        return redirect()->route('posts.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
