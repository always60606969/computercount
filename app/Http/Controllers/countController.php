<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class countcontroller extends Controller
{

    public function count()
    {
      return view('computer.computerShow');
    }
    public function addcomputer()
    {
      return view('parts.add');
    }
    public function logout()
    {
      return view('computer.logoutBlade');
    }
    public function users()
    {
      return view('parts.admin');
    }
}
