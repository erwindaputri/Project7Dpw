<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class   AuthController extends controller {
  function showlogin(){
    return view('admin.login');
  }

  function LoginProcess(){
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])){
      return redirect('admin/dashboard')->with('success', 'berhasil login');
    } else{
      return back()->with('danger','login anda gagal');
    }
  }

  function logout(){
    Auth::logout();
    return redirect('login');
  }



}