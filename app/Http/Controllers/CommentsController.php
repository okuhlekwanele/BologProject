<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; 

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string',
            // Add any other validation rules for your comment fields
        ]);

        // Create a new comment using the validated data
        Comment::create([
            'content' => $request->content,
            // Add any other fields you have in your comments table
        ]);

        // Redirect the user after storing the comment
        return redirect()->back()->with('success', 'Comment posted successfully.');
    }
}

