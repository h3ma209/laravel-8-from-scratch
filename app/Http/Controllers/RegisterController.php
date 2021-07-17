<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

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
        User::create($attributes);
        return redirect("/");
    }
}
