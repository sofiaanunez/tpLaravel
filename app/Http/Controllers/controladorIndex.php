<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorIndex extends Controller
{
    public function headerIndex(){
      return view('plantillaIndex.headerIndex');
    }
}
