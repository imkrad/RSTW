<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(Request $request){
        $options = $request->option;
        switch($options){
            default: 
            return inertia('Profile/Index');
        }
    }

    public function update(ProfileRequest $request){
        $data = User::find(\Auth::user()->id);
        $data->profile()->update($request->except(['username', 'email']));
        
        return back()->with([
            'data' => $data,
            'message' => 'User update was successful!', 
            'info' => "You've successfully update user profile.",
            'status' => true
        ]);
    }
}
