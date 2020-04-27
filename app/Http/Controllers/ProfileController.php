<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ProfileController extends Controller
{
  
      public function index(){
      
      return view('profile/index');
      
  }
        
}
