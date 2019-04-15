<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function getComment()
    {
        $data['commentlist'] = Comment::orderBy('cmt_id','desc')->get();
        return view('admin.comment',$data);
    }

    public function getDeleteComment($id)
    {
        Tour::destroy($id);
        return back();
    }
}
