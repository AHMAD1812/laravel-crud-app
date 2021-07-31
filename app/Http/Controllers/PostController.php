<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function savePost(Request $data)
    {
        DB::table('posts')->insert([
            'name'=>$data->name,
            'description'=>$data->description

        ]);

        return back()->with('add_check','Data added Successfully');
    }

    public function postList()
    {
        $posts= DB::table('posts')->get();
        return view('post-list', compact('posts'));
    }

    public function editPost($id)
    {
        $post= DB::table('posts')->where('id',$id)->first();
        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $data)
    {
        DB::table('posts')->where('id', $data->id)->update([
            'name'=>$data->name,
            'description'=>$data->description

        ]);

        return back()->with('post_update','data updated Successfully');
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','data deleted Successfully');
    }
}
