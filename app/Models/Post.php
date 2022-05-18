<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    // public function like($user = null){
    //     $this->likes()->updateOrCreate([
    //         'user_id'=>$user ? $user->id:auth()->id(), // this check if there is aleady a like data with a user
    //     ],[
    //         'liked' =>true // if not then it sets its value to true // what if we try to dele
    //     ]);
    // }

    // public function unlike(){
    //     // when unliked the data from the table should be deleated
    //     $user = auth()->user();
    //     $post = Post::where('user_id',$user->id);
    //     $like = Like::where('user_id',$user->id)->where('post_id',$post->id)->where('liked',true);

    //     return $like->delete();
    //     // delete like row, where user_id = $user->id and post_id = 
    // }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
