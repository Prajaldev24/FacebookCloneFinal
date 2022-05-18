<?php

namespace App\Models;

use App\Models\Posts;
use App\Models\Profile;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'month',
        'day',
        'year',
        'gender',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //using a eloquent mutator, to hash the password before storing
    public function setPasswordAttribute($password){
        // $this->attributes['password'] = Hash::make($password); // you can also use the bycrypt() function
        $this->attributes['password']=bcrypt($password);
    }

    public function posts(){
        return $this->hasMany(Posts::class);
    }
    
    public function profile(){
        return $this->hasOne(Profile::class);
    } 

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
