<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=Validator::make($request->all(),[
            'body' => 'required | string ',
            'post_id' => 'required',
        ]);

        if($validateData->fails()){
            return redirect()->back()->withErrors($validateData)->withInput();
        }


        $post_id = (int) $request->input('post_id');

        $comment = new Comment();
        $comment->body =  $request->input('body');
        $comment->post_id = $post_id;
        $comment->save();

        return redirect()->route('post-comments.index')
        ->with('Success','Comment Added Succussfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
