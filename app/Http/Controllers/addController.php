<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\computercount;
use App\computercount2;
use App\computercount3;
use App\loginUser;
use DB;
use User;

class addController extends Controller
{
  public function store(Request $req){
    $computer = new computercount;
    $computer->device_name =$req->device_name;
    $computer->device_cpu=$req->device_cpu;
    $computer->device_ram =$req->device_ram." GB";
    $computer->device_capacity =$req->device_capacity." GB";
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
    public function store2(Request $req){
      $install = new computercount2;
      $install ->i_date =$req->i_date;
      $install ->i_programms =$req->i_programms;
      $install ->comID =$req->comID2;
      $install ->save();
      $msg = "Амжилттай хадгаллаа!!!";
      $install=DB::table('td_programms')->get();
      return view('computer.computerShow', compact('msg'));
    }
    public function store3(Request $req){
      $change = new computercount3;
      $change ->h_date =$req ->h_date;
      $change ->h_reason =$req ->h_reason;
      $change ->h_give =$req ->h_give;
      $change ->h_recieve =$req ->h_recieve;
      $change ->comID =$req ->comID3;
      $change ->save();
      $msg =
      DB::table('tb_change') ->get();
      return view('computer.computerShow');
    }
public function update(Request $req){
  $updateDB = computercount::find($req->eid);
  $updateDB->device_name = $req->edevice_name;
  $updateDB->device_cpu=$req->edevice_cpu;
  $updateDB->device_ram =$req->edevice_ram." GB";
  $updateDB->device_capacity =$req->edevice_capacity." GB";
  $updateDB->device_mark=$req->edevice_mark;
  $updateDB->device_keyboard =$req->edevice_keyboard;
  $updateDB->device_mouse =$req->edevice_mouse;
  $updateDB->device_desktop=$req->edevice_desktop;
  $updateDB->device_other =$req->edevice_other;
  $updateDB->device_system =$req->edevice_system;
  $updateDB->device_user=$req->edevice_user;
  $updateDB->device_adddate =$req->edevice_adddate;
  $updateDB->device_id =$req->edevice_id;
  $updateDB->device_unit=$req->edevice_unit;
  $updateDB->device_username =$req->edevice_username;
  $updateDB->device_ip =$req->edevice_ip;
  $updateDB->device_mac=$req->edevice_mac;
  $updateDB->device_factory =$req->edevice_factory;
  $updateDB->device_country =$req->edevice_country;
  $updateDB->device_mdate=$req->edevice_mdate;
  $updateDB->device_udate =$req->edevice_udate;
  $updateDB->save();
  $msg = "Амжилттай хадгаллаа!!!";
  return view("computer.computerShow", compact("msg"));
}
public function update2(Request $req){
  $updateDB2 = computercount2::find($req->eid2);
  $updateDB2->id = $req->eid2;
  $updateDB2->i_date=$req->ei_date;
  $updateDB2->i_programms =$req->ei_programms;
  $updateDB2->comID = $req->ecomID;
  $updateDB2->save();
  $msg = "Амжилттай хадгаллаа!!!";
  return view("computer.computerShow", compact("msg"));
  }
  public function update3(Request $req){
    $changeUpdate = computercount3::find($req->eid3);
    $changeUpdate->id = $req->eid3;
    $changeUpdate ->h_date =$req ->eh_date;
    $changeUpdate ->h_reason =$req ->eh_reason;
    $changeUpdate ->h_give =$req ->eh_give;
    $changeUpdate ->h_recieve =$req ->eh_recieve;
    $changeUpdate ->comID =$req ->ecomID2;
    $changeUpdate->save();
    $msg = "Амжилттай хадгаллаа!!!";
    return view("computer.computerShow", compact("msg"));
    }

public function delete(Request $nn){
  $deleteDB = computercount::find($nn->id);
  $deleteDB->delete();
  return "Усдлаа";
}
public function delete2(Request $req){
  $deleteDB2 = computercount2::find($req->id);
  $deleteDB2->delete();
  return "Усдлаа";
}
public function delete3(Request $req){
  $deleteDB3 = computercount3::find($req->id);
  $deleteDB3->delete();
  return "Усдлаа";
}
public function delete12(Request $req){
  $deleteDB4 = loginUser::find($req->id);
  $deleteDB4->delete();
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
  public function getDatatable3(Request $req)
  {
    $change =DB::table('tb_change')
    ->where("comID", "=", $req->id)
    ->get();
    return DataTables::of($change)
      ->make(true);
  }
  public function getUserLogin(Request $req)
  {
    $user=DB::table('users')->get();
    return DataTables::of($user)
    ->make(true);
  }

  public function storeUser(Request $data){
    // User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    // ]);
    // return redirect("/home");

    return "dfgdfgfdg";


  }
}
