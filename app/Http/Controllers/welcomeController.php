<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class welcomeController extends Controller
{
    
public function index(Request $request)
    {

          if(!Auth::check()){
            return redirect('login');
        }
      
        return view('welcome');
    }


}
