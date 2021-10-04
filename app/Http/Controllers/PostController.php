<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function form($id = false){
        if($id){
            $data = Post::findorFail($id);
            return view('post.form', compact('data'));
        }
        $data = false;
        return view('post.form', compact('data'));
    }

    public function save(Request $request){
        $data = new Post($request->all());
        $data->save();

        if($data){
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function update(Request $request, $id){
        $data = Post::findorFail($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        if($data){
            return redirect()->route('home');
        }else{
            return back();
        }
    }
    public function delete($id){
        $data = Post::destroy($id);

        if($data){
            return redirect()->route('home');
        }else{
            dd('Error, failed to delete');
        }
    }
}
