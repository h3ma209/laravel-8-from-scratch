@extends('layouts.app')

@section('content')


    <section>
        <h1>Register</h1>
        <main class="max-w-lg mx-auto bg-grey">
            <form method="POST" action='/register' class="mt-10">
                @csrf
                
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full"
                    name="username"
                    value="{{old('username')}}"
                    id='username' required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        email
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                    id='email' required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        password
                    </label>
                    <input type="text" class="border border-gray-400 p-2 w-full"
                    name="password"
                    
                    id='password' required>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <button class="
                    bg-blue-400 text-blue rounded py-2 px-4 hover:bg-blue-500
                    
                    " type="submit">
                    Submit
                    </button>
                </div>
            </form>

        </main>
    </section>

    <style>
        section{
            height: 100%;
            width: 100%;
            
            display: grid;
            place-content: center;
        }
        form{
            background: #dadada;
            padding: 10%;
        }
        .mb-6{
            margin: 15px;
        }

    </style>
    
@endsection