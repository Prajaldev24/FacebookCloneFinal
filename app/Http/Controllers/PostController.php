<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Image;
use App\Models\Story;
use App\Models\Simage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    public function createPost(Request $request){
        $user = auth()->user();
        // dd($user->id);
        if($request->caption || $request->hasFile('images')){
            $post = Post::create([
                'user_id'=>$user->id,
                'caption'=>$request->caption,
            ]);
           
            foreach($request->file('images') as $imageFile){
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time().Str::random(5).'.'.$extension;
                $imageFile->move(public_path('/uploads/post-images/'),$fileName);
                Image::create([
                    'post_id' => $post->id,
                    'image' => 'uploads/post-images/'.$fileName,
                ]);
            }
            return redirect(route('homepage'))->with('success',"Your post has been uploaded");
        }
        else{
            return redirect(route('homepage'))->with('fail',"Nothing to post.");
        }
    }

    public function storyFeed(){
        return view('story');
    }

    public function createStory(Request $request){
        $user = auth()->user();
        if($request->hasFile('story_pic')){
            $story = Story::create([
                'user_id' => $user->id,
            ]);  

            // foreach($request->file('story_pic') as $storyImage){
            $image = $request->file('story_pic');
            $extension = $image->getClientOriginalExtension();
            $fileName = time().Str::random(4).'.'.$extension;
            $image->move(public_path('/uploads/story-images/'),$fileName);
            Simage::create([
                'story_id' => $story->id,
                'image' => 'uploads/story-images/'.$fileName,
            ]);
            return redirect(route('homepage'))->with('success','Story added');
        }
        else{
            return redirect(route('storyPage'))->with('fail','Add an image to upload');
        }
    }
}
