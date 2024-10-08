<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct () {
        $this->middleware('auth');
    }

    public function index()
    {

        $posts = Post::all();
        $posts = Post::orderby('created_at','desc')->paginate(8);
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
            //'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $a = new Post;
        $a->postTitle = $validatedData['postTitle'];
        $a->postContent = $validatedData['postContent'];
        $a->postCategory = $validatedData['postCategory'];

        $a->user_id = auth()->id();

        if ($request->hasFile('image')){
            $imagePath = $request->file('image')->store('images','public');
            $a->image_path=$imagePath;
        }

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
        $post = Post::findorFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('message','Post was deleted.');

    }
}
