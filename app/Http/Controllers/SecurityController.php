<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function formLogin()
    {
        return view("security.form-login");
    }

    public function prosesLogin(Request $request)
    {
        $Email = $request->get("email");
        $Password = $request->get("password");

        $user = User::where('email', $Email)->where("password", $Password)->first();
        if ($user !=null) {
            Auth::login($user);
            return "Login Berhasil";
        }else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }
}
