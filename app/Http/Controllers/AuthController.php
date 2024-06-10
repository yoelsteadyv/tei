<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// class AuthController extends Controller
// {
//   public function login(Request $request)
//   {
//     $credentials = $request->validate([
//       'email' => 'required|email',
//       'password' => 'required',
//     ]);

//     if (Auth::attempt($credentials)) {
//       $request->session()->regenerate();
//       return redirect()->intended('dashboard');
//     }

//     return back()->withErrors([
//       'email' => 'The provided credentials do not match our records.',
//     ]);
//   }

//   public function register(Request $request)
//   {
//     $validatedData = $request->validate([
//       'name' => 'required|string|max:255',
//       'email' => 'required|string|email|max:255|unique:users',
//       'password' => 'required|string|min:8|confirmed',
//       'role' => 'required|in:admin,manager,material,marketing',
//     ]);

//     $user = User::create([
//       'name' => $validatedData['name'],
//       'email' => $validatedData['email'],
//       'password' => Hash::make($validatedData['password']),
//       'role' => $validatedData['role'],
//     ]);

//     Auth::login($user);

//     return redirect('/home');
//   }
// }
