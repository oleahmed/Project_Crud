<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('user.register');
    }

    public function register()
    {
        $this->validate(request(),[
            'name' => 'required|alpha_dash|unique:users,name',
            'email' => 'required|email',
            'number' => 'required|numeric',
            'password' => 'required|confirmed|min:4'
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'number' => request('number'),
            'password' => bcrypt(request('password')),
        ]);

        return redirect()->route('user.login.show')->with('regSuc','Registration Successful');
    }
}
