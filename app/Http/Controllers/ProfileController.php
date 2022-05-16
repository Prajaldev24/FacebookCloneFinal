<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request){
        $profile = auth()->user()->profile; //authenticated user's profile
        if($request->hasFile('profilePic')){
            $file = $request->file('profilePic'); // requesting user input file
            $extension = $file->getClientOriginalExtension(); // seperating extension from requested file
            $fileName = time().'.'.$extension; // concatinating time with extension, name to be store in local and db storage
            $file->move(public_path('uploads/profile-picture'),$fileName); // storing is user defined folders,
            $profile->profile_pic = 'uploads/profile-picture/'.$fileName; // pupulating profile_pic field with new file
            $profile->update(); // updtaing the previous value
            return redirect('/profile')->with('sucess',"Profile picture uploaded.");
        }
        else{
            return redirect('/profile')->with('fail',"No images selected.");
        }
    }

    public function updateCover(Request $request){
        $profile = auth()->user()->profile;
        if($request->hasFile('CoverPic')){
            $file = $request->file('CoverPic');
            $extension = $file->getClientOriginalExtension(); // seperating extension from requested file
            $fileName = time().'.'.$extension; // concatinating time with extension, name to be store in local and db storage
            $file->move(public_path('uploads/cover-picture'),$fileName); // storing is user defined folders,
            $profile->cover_pic = 'uploads/cover-picture/'.$fileName; // pupulating profile_pic field with new file
            $profile->update(); // updtaing the previous value
            return redirect(route('profile'))->with('sucess',"Cover picture uploaded.");
        }
        else{
            return redirect(route('profile'))->with('fail',"No images selected.");
        }
    }
}
