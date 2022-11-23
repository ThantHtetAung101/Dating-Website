<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function frontPage() {
        return view('accounts.frontPage');
    }
    public function register() {
        return view('accounts.register');
    }
    public function create(Request $request) {
        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return view('accounts.login');
    }
}
