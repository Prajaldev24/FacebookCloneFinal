<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function homepage(){
        $posts = Post::all();
        return view('homepage',[
            'posts' => $posts,
        ]);
    }
 
    public function profile(){
        return view('profile');
    }
    //Login view
    public function login(){
        return view('login');
    }

    //Login 
    public function loginUser(Request $request){
        $request->validate([
            'lemail'=>'required|email',
            'lpassword'=>'required|min:8',
        ]);
        
        $user = User::where('email','=',$request->lemail)->first();
        
        if($user){
            if(Hash::check($request->lpassword, $user->password)){
                auth()->login($user);   
                // $request->session()->put('loginId',$user->id);
                // dd(session()->all());    
                return redirect('/homepage')->with('success','Welcome Back');
            }
            else{
                session()->flash('fail', 'Password doesnt match.');
            }
        }else{
            session()->flash('fail', 'The credendtials do not match');
        }
        return redirect('/');
    }   

    //Registration
    
    public function registerUser( Request $request){
        $attributes = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users,email',
            'month'=>'required|string',
            'day'=>'required',
            'year'=>'required',
            'gender'=>'required',
            'password'=>'required|min:8'
        ]);
         
        $user = User::create($attributes);

        auth()->login($user);

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->profile_pic = "";
        $profile->cover_pic = "";
        $profile->bio = "";
        $profile->save();

        return redirect(route('homepage'))->with('success','You have been registered successfully');
        
        //with() works as the combination of session()->flash();

    }   
    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}
