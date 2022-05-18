<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Story;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function check(){
        if(Auth::check()){
            $users = User::all();
            $posts = Post::latest()->get();
            $stories = Story::latest()->get();
            return view('homepage',[
                'posts' => $posts,  
                'stories' => $stories,
                'users' => $users,
            ]);
        }
        else{
            return view('login');
        }
    }

    public function profile(){
        return view('profile');
    }

    //Login 
    public function loginUser(Request $request){
        $request->validate([
            'lemail'=>'required|email',
            'lpassword'=>'required|min:8',
        ]);
        
        if (Auth::attempt(['email' => $request->lemail, 'password' => $request->lpassword])) {
            // The user is active, not su   spended, and exists.
            return redirect(route('authcheck'))->with('success','Welcome Back');
        }
        else{
            session()->flash('fail', 'Credentials do not match.');
        }

        return redirect(route('authcheck'));
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

        auth()->login($user); // login after registration 

        $profile = new Profile();
        $profile->user_id = $user->id; // newly creted user's id is assigned as foreign key in profile
        $profile->save();

        return redirect(route('authcheck'))->with('success','You have been registered successfully');
        
        //with() works as the combination of session()->flash();

    }   
    public function logout(){
        auth()->logout();
        return redirect('/')->with('success', 'Logged out successfully');
    }
}
