<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function createPost(Request $request){
        dd($request->all());
    }
    public function storyFeed(){
        return view('story');
    }
}
