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

    public function like($user = null, $liked=true){
        $this->likes()->updateOrCreate([
            'user_id'=>$user ? $user->id:auth()->id(), // this check if there is aleady a like data with a user
        ],[
            'liked' =>$liked // if not then it sets its value to true // what if we try to dele
        ]);
    }

    public function unlike($user = null){
        return $this->like($user,false);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
