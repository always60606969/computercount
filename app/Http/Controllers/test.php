<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use DB;
class test extends Controller
{
  public function test ()
  {
      return view('computer.test');
  }
}
