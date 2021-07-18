<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function create(){
        return view("sessions.login");
    }
    public function destroy(){
        auth()->logout();
        return redirect("/")->with("success",'Goodbye');
    }

    public function store(){
        $attributes = request()->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if(auth()->attempt($attributes)){
            return redirect("/")->with("success","welcome back");
        }

        else{
            return back()->withErrors(["email"=>"wrong credentials"]);
        }

    }
}
