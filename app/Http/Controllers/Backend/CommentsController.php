<?php

namespace App\Http\Controllers\Backend;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    // public function index()
    // {
    //     $comments = Comment::latest()->paginate(12);
    //     return view('backend.comments.index', compact('comments'));
    // }

    // public function show($id)
    // {
    //     $comment = Comment::findOrFail($id);

    //     return view('backend.comments.show')
    //                 ->with('comment', $comment);
    // }

    // public function status($id)
    // {
    //     $comment = Comment::findOrFail($id);
    //     $status = $comment->is_published;
        
    //     if($status) {
    //         $status = 0;
    //     } else {
    //         $status = 1;
    //     }
    //     $comment->is_published = $status;
    //     $result = $comment->save();
      
    //     if($result) {
    //          session()->flash('success', 'Comment updated Successfully!');
    //     } else {
    //          session()->flash('error', 'Something went wrong.');
    //     }

    //     return redirect() -> route('backend.comments');
    // }

    // public function showSingle($id)
    // {
    //     $comments = Comment::where('blog_id', $id)->latest()->paginate(10);
    //     return view('backend.comments.show-single-blog', compact('comments'));
    // }

    // public function destroy($id)
    // {
    //   $comment = Comment::findOrFail($id);
    //   $result = $comment->delete();
      
    //   if($result) {
    //          session()->flash('success', 'Comment deleted Successfully!');
    //     } else {
    //          session()->flash('error', 'Something went wrong.');
    //     }

    //     return redirect() -> route('backend.comments');
    // }
}
