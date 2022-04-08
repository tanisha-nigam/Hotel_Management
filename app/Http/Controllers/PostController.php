<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost()
    {
        return view('add-post');
    }
    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'destination' => $request->destination,
            'hotel' => $request->hotel,
            'room' => $request->room,
            'meals' => $request->meals,
            'message' => $request->message
        ]);
        return redirect('posts');
    }
    public function getPostById($id)
    {
        $post =DB::table('posts')->where ('id', $id)->first();
        return view('single-post', compact('post'));
    }
    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'destination' => $request->destination,
            'hotel' => $request->hotel,
            'room' => $request->room,
            'meals' => $request->meals,
            'message' => $request->message
        ]);
        return redirect('posts');
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('posts');
    }
}
