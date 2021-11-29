<?php 

namespace App\Http\Controllers;

class AdminController extends Controller {

  function showadmin() {
    return view('admin.dashboard');
  }


  function kategori() {
    return view('admin.kategori');
  }


    function profile() {
    return view('admin.profile');
  }





} 