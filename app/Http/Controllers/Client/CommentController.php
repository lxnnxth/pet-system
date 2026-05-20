<?php

Namespace App\Http\Controllers\Client;
use App\Http\Controllers\Client\CommentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Comment;


class CommentController extends Controller
{
   public function store(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:100',
        'comment' => 'required|string',
    ]);

    // Create the comment
    Comment::create([
        'pet_id' => $id,
        'name' => $request->name,
        'comment' => $request->comment,
    ]);

    return redirect()->back()->with('success', 'Comment posted!');
}
}
