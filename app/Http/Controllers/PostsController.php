<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function createPost(Request $request){
        // $post = new Posts();
        $file = $request->hasFile('images');
        if($file){
            
            foreach($request->file('images') as $imageFile){
                // $post->user_id = auth()->user()->id;
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().Str::random(5).'.'.$extension;
                $imageFile->move(public_path('uploads/posts'),$fileName);
                POSTS::create([
                    'caption' => $request->caption,
                    'user_id' => auth()->user()->id,
                    'images' => $fileName,
                ]);
            }
            return redirect(route('homepage'))->with('success','Post uploaded');
        }
        else{
            return redirect(route('homepage'))->with('fail','Please fill all fileds');
        }
    
    }
}



