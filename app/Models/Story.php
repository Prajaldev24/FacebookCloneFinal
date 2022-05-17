<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function simages(){
        return $this->hasMany(Simage::class);
    }
}
// Post::where('Expiration_date','<',Carbon::now())->delete();

// DB::table('some-table')->where('created_at', '<=', Carbon::now()->subDay())->delete();

