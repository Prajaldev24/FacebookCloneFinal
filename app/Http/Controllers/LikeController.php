<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function likePost(Request $request){
        $user = Auth::user();
        $post_id = $request->likeOn; // like on a certain post with id
        $isLikedAlready = Like::where('user_id',$user->id)->where('post_id',$post_id)->where('liked',true)->first();
        if(!$isLikedAlready || $user->id !== $isLikedAlready->user_id){   
            Like::create([
                'user_id' => $user->id,
                'post_id' => $post_id,
                'liked' => true,
            ]);
            return redirect(route('authcheck'))->with('success','post liked');
        }
        else{
            $isLikedAlready->delete();
            return redirect(route('authcheck'))->with('success','unliked');
        }
    }
}
