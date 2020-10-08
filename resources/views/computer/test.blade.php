@extends('mainPanel.mainPanel')

@section('content')






<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Бүртгэх хэсэг</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
               <div class="col-sm-9" >
                      <h5 align='center' style="color:red;">Техник Үзүүлэлт</h5>
                      <hr style="border: 2px dotted black;">
               </div>
        </div>
          <form  action="{{action("addController@store")}}" method="post">
              @csrf
              <input type="hidden" name="ID" id="ID">
            <div class="row">
            <div class="form-group col-md-3 text-left">
                  <label>Техник хэрэгсэл нэр</label>
                  <input type="text" id="device_name" name="device_name" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                  <label>CPU /GB/</label>
                  <input type="number" id="device_cpu" name="device_cpu" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                  <label>RAM /GB/ </label>
                  <input type="number" id="device_ram" name="device_ram" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
              <label>Hard Disk Хэмжээ</label>
              <input type="number" id="device_capacity" name="device_capacity" autocomplete="off" class="form-control" />
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 text-left">
                  <label> Hard Disk Марк</label>
                    <input type="text" id="device_mark" name="device_mark" autocomplete="off"class="form-control" />
                </div>
                <div class="form-group col-md-3 text-left">
                    <label>Гар /ширхэг/</label>
                    <input type="number" id="device_keyboard" name="device_keyboard" autocomplete="off"class="form-control" />
                </div>
               <div class="form-group col-md-3 text-left">
                    <label>Хулгана /ширхэг/</label>
                    <input type="number" id="device_mouse" name="device_mouse" autocomplete="off"class="form-control" />
                </div>
                <div class="form-group col-md-3 text-left">
                       <label>Дэлгэц /ширхэг/</label>
                       <input type="number" id="device_desktop" name="device_desktop" autocomplete="off"class="form-control" />
                </div>
         </div>
         <div class="form-group col-md-12 text-left">
                <label>Бусад</label>
                <input type="text" id="device_other" name="device_other" autocomplete="off" class="form-control" />
         </div>
           <h5 align='center' style="color:red;">Баталгаажуулсан тэмдэглэл</h5>
         <hr style="border: 2px dotted black;">
         <div class="row">
               <div class="form-group col-md-3 text-left">
                 <label> Үйлдлийн систем</label>

                   <select class="form-control" id="device_system" name="device_system" autocomplete="off" class="form-control">
                     <option value="0">Сонгоно уу</option>
                     <option value="Windows XP">Windows XP</option>
                     <option value="Windows Vista">Windows Vista</option>
                     <option value="Windows 7<">Windows 7</option>
                     <option value="Windows 10<">Windows 10</option>
                   </select>

               </div>
               <div class="form-group col-md-3 text-left">
                   <label>Хэрэглэгчийн нэр</label>
                   <input type="text" id="device_user" name="device_user" autocomplete="off" class="form-control" />
               </div>
              <div class="form-group col-md-3 text-left">
                   <label>Огноо</label>
                   <input type="date" id="device_adddate" name="device_adddate" autocomplete="off" class="form-control" />
               </div>
               <div class="form-group col-md-3 text-left">
                      <label>Хувийн дугаар</label>
                      <input type="text" id="device_id" name="device_id" autocomplete="off" class="form-control" />
               </div>
        </div>

        <h5 align='center' style="color:red;">Сүлжээнд холбогдсон техник хэрэгсэл</h5>
        <hr style="border: 2px dotted black;">
          <div class="row">
            <div class="form-group col-md-3 text-left">
              <label>Анги, байгууллага</label>
              <input type="text" id="device_unit" name="device_unit" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                    <label>Хэрэглэгчийн нэр</label>
                    <input type="text" id="device_username" name="device_username" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                    <label>Ip хаяг</label>
                    <input type="text" id="device_ip" name="device_ip"  autocomplete="off" class="form-control" />
              </div>
              <div class="form-group col-md-3 text-left">
                    <label>Mac хаяг</label>
                    <input type="text" id="device_mac" name="device_mac" autocomplete="off" class="form-control" />
              </div>
          </div>
            <h5 align='center' style="color:red;"> Тоног төхөөрөмжийн зориулалт</h5>
            <hr style="border:  2px dotted black;">
            <div class="form-group col-md-12 text-left">
              <label>Үйлдвэрлэсэн үйлдвэрийн дугаар</label>
              <input type="text" id="device_factory" name="device_factory" autocomplete="off" class="form-control" />
            </div>
                <div class="row">
                     <div class="form-group col-md-6 text-left">
                           <label>Хэрэглэгчийн нэр</label>
                           <input type="text" id="device_country" name="device_country" autocomplete="off" class="form-control" />
                    </div>
                     <div class="form-group col-md-6 text-left">
                                <input type="text" id="device_mdate" name="device_mdate" autocomplete="off" class="form-control" />
                     </div>
            <div class="form-group col-md-12 text-Center" name="companyName" autocomplete="off" class="form-control">
                    <label>Ашиглалтанд оруулсан</label>
                    <input type="date" id="device_udate" name="device_udate" autocomplete="off" class="form-control" />
             </div>
                </div>
             <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</div>


@endsection
