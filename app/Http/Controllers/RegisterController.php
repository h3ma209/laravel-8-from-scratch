<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(){
        // return request()->all()
        //var_dump(request());
        $attributes = request()->validate([
            
            "username"=>"required|max:255|unique:users,username",
            "email"=>"required|email|unique:users,email",
            "password"=>"required"
        ]);
        $user = User::create($attributes);
        session()->flash('success', "Your account has been created");
        auth()->login($user);
        return redirect("/");
    }
}
