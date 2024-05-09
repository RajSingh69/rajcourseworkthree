<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\NewNotification;



class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comments = Comment::all();
        return view('comments.index', ['comments'=> $comments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $post_id)
    {
        //
        $validatedData = $request->validate([
            
            'commentContent' => 'required|max:255',
            

        ]);

        $a = new Comment;
        $a->commentContent = $validatedData['commentContent'];
        $a->post_id = $post_id;
        $a->user_id = auth()->id();
        $a->save();

        $post = Post::find($post_id);
        $postUser = $post->user;
        $postUser->notify(new NewNotification($a));

        session()->flash('message', 'Comment was created.');
        return redirect()->back()->with('success','Comment added');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comment = Comment::findOrFail($id);
        return view('comments.show', ['post_id' => $post_id]);
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
