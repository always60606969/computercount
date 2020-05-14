<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\computercount;
use DB;
class addController extends Controller
{
  public function store(Request $req){
    $computer = new computercount;
    $computer->device_name =$req->device_name;
    $computer->device_cpu=$req->device_cpu;
    $computer->device_ram =$req->device_ram;
    $computer->device_capacity =$req->device_capacity;
    $computer->device_mark=$req->device_mark;
    $computer->device_keyboard =$req->device_keyboard;
    $computer->device_mouse =$req->device_mouse;
    $computer->device_desktop=$req->device_desktop;
    $computer->device_other =$req->device_other;
    $computer->device_system =$req->device_system;
    $computer->device_user=$req->device_user;
    $computer->device_adddate =$req->device_adddate;
    $computer->device_id =$req->device_id;
    $computer->device_unit=$req->device_unit;
    $computer->device_username =$req->device_username;
    $computer->device_ip =$req->device_ip;
    $computer->device_mac=$req->device_mac;
    $computer->device_factory =$req->device_factory;
    $computer->device_country =$req->device_country;
    $computer->device_mdate=$req->device_mdate;
    $computer->device_udate =$req->device_udate;
    $computer->save();
    $msg = "Амжилттай хадгаллаа!!!";
    $computers=DB::table('tb_addcomputer')->get();
    return view('computer.computerShow', compact('msg', 'computers'));
}
public function update(Request $req){
  $updateDB = computercount::find($req->ID);
  $updateDB->device_name = $req->device_name;
  $updateDB->device_cpu=$req->device_cpu;
  $updateDB->device_ram =$req->device_ram;
  $updateDB->device_capacity =$req->device_capacity;
  $updateDB->device_mark=$req->device_mark;
  $updateDB->device_keyboard =$req->device_keyboard;
  $updateDB->device_mouse =$req->device_mouse;
  $updateDB->device_desktop=$req->device_desktop;
  $updateDB->device_other =$req->device_other;
  $updateDB->device_system =$req->device_system;
  $updateDB->device_user=$req->device_user;
  $updateDB->device_adddate =$req->device_adddate;
  $updateDB->device_id =$req->device_id;
  $updateDB->device_unit=$req->device_unit;
  $updateDB->device_username =$req->device_username;
  $updateDB->device_ip =$req->device_ip;
  $updateDB->device_mac=$req->device_mac;
  $updateDB->device_factory =$req->device_factory;
  $updateDB->device_country =$req->device_country;
  $updateDB->device_mdate=$req->device_mdate;
  $updateDB->device_udate =$req->device_udate;
  $updateDB->save();
  $msg = "Амжилттай хадгаллаа!!!";
  return view("computer.computerShow", compact("msg"));
}
public function delete(Request $nn){
  $deleteDB = computercount::find($nn->id);
  $deleteDB->delete();
  return "Усдлаа";
}
public static function showComputer()
{
  // $computers=DB::table('tb_addcomputer')->get();
  //     return DataTables::of($computers)
  //       ->make(true);
  //     Data duudaj haruulah
  //      return view('layout.master', compact('computers'));
  //     return $computers;
}
public function getDataTable()
  {
    $computers=DB::table('tb_addcomputer')->get();
    return DataTables::of($computers)
      ->make(true);
  }
  public function getDataTable2(Request $req)
    {
      $programms =DB::table('td_programms')
          ->where("comID", "=", $req->id)
          ->get();
       return DataTables::of($programms)->make(true);

      // return "irlee ".$req->id;

    }

}
