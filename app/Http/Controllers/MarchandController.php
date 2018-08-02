<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarchandController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
 public function marchand()
 {
     return view('bonjour');
 }
}
