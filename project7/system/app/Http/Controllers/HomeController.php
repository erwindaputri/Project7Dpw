<?php 

namespace App\Http\Controllers;

class HomeController extends Controller
{

function ShowHome(){
    return view('index');
  }

  function ShowAbout(){
    return view('about');
  }

    function ShowContact(){
    return view('contact');
  }

    function ShowVegetables(){
    return view('vegetables');
  }



}