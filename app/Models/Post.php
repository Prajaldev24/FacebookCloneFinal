<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //helps to dynamically build up your queries, Post::all(); gives you basic attributes for all the posts 
    //but if you say Post::withLikes()->get(); // gives the posts including the number of likes 
    public function scopeWithLikes($query){ // scope called withlikes
        // SELECT * FROM `posts` 
        //     LEFT JOIN (
        //         SELECT post_id, SUM(liked) likes from likes GROUP BY post_id
        //     ) likes on likes.post_id = posts.id

        $query->leftJoinSub(
            'SELECT post_id, SUM(liked) likes from likes GROUP BY post_id',
            'likes',
            'likes.post_id',
            'posts.id',
        );

        // DB::table
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
