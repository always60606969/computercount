<div class="modal fade" id="updateexampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateexampleModalScrollableTitle">Бүртгэх хэсэг</h5>
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

          <form  action="{{action("addController@update")}}" method="post">
              @csrf
              <input type="hidden" name="eid" id="eid">
            <div class="row">
            <div class="form-group col-md-3 text-left">
                  <label>Техник хэрэгсэл нэр</label>
                  <input type="text" id="edevice_name" name="edevice_name" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                  <label>CPU /GB/</label>
                  <input type="text" id="edevice_cpu" name="edevice_cpu" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                  <label>RAM /GB/ </label>
                  <input type="text" id="edevice_ram" name="edevice_ram" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
              <label>Hard Disk Хэмжээ</label>
              <input type="text" id="edevice_capacity" name="edevice_capacity" autocomplete="off" class="form-control" />
            </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 text-left">
                  <label> Hard Disk Марк</label>
                    <input type="text" id="edevice_mark" name="edevice_mark" autocomplete="off"class="form-control" />
                </div>
                <div class="form-group col-md-3 text-left">
                    <label>Гар /ширхэг/</label>
                    <input type="number" id="edevice_keyboard" name="edevice_keyboard" autocomplete="off"class="form-control" />
                </div>
               <div class="form-group col-md-3 text-left">
                    <label>Хулгана /ширхэг/</label>
                    <input type="number" id="edevice_mouse" name="edevice_mouse" autocomplete="off"class="form-control" />
                </div>
                <div class="form-group col-md-3 text-left">
                       <label>Дэлгэц /ширхэг/</label>
                       <input type="number" id="edevice_desktop" name="edevice_desktop" autocomplete="off"class="form-control" />
                </div>
         </div>
         <div class="form-group col-md-12 text-left">
                <label>Бусад</label>
                <input type="text" id="edevice_other" name="edevice_other" autocomplete="off" class="form-control" />
         </div>
           <h5 align='center' style="color:red;">Баталгаажуулсан тэмдэглэл</h5>
         <hr style="border: 2px dotted black;">
         <div class="row">
               <div class="form-group col-md-3 text-left">
                 <label> Үйлдлийн систем</label>

                   <select class="form-control" id="edevice_system" name="edevice_system" autocomplete="off" class="form-control">
                     <option value="0">Сонгоно уу</option>
                     <option value="Windows XP">Windows XP</option>
                     <option value="Windows Vista">Windows Vista</option>
                     <option value="Windows 7">Windows 7</option>
                     <option value="Windows 10">Windows 10</option>
                   </select>

               </div>
               <div class="form-group col-md-3 text-left">
                   <label>Хэрэглэгчийн нэр</label>
                   <input type="text" id="edevice_user" name="edevice_user" autocomplete="off" class="form-control" />
               </div>
              <div class="form-group col-md-3 text-left">
                   <label>Огноо</label>
                   <input type="date" id="edevice_adddate" name="edevice_adddate" autocomplete="off" class="form-control" />
               </div>
               <div class="form-group col-md-3 text-left">
                      <label>Хувийн дугаар</label>
                      <input type="text" id="edevice_id" name="edevice_id" autocomplete="off" class="form-control" />
               </div>
        </div>

        <h5 align='center' style="color:red;">Сүлжээнд холбогдсон техник хэрэгсэл</h5>
        <hr style="border: 2px dotted black;">

          <div class="row">
            <div class="form-group col-md-3 text-left">
              <label>Анги, байгууллага</label>
              <input type="text" id="edevice_unit" name="edevice_unit" autocomplete="off" class="form-control" />
        </div>
            <div class="form-group col-md-3 text-left">
                    <label>Хэрэглэгчийн нэр</label>
                    <input type="text" id="edevice_username" name="edevice_username" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-3 text-left">
                    <label>Ip хаяг</label>
                    <input type="text" id="edevice_ip" name="edevice_ip"  autocomplete="off" class="form-control" />
              </div>
              <div class="form-group col-md-3 text-left">
                    <label>Mac хаяг</label>
                    <input type="text" id="edevice_mac" name="edevice_mac" autocomplete="off" class="form-control" />
              </div>
        </div>
            <h5 align='center' style="color:red;"> Тоног төхөөрөмжийн зориулалт</h5>
            <hr style="border:  2px dotted black;">
            <div class="form-group col-md-12 text-left">
              <label>Үйлдвэрлэсэн үйлдвэрийн дугаар</label>
              <input type="text" id="edevice_factory" name="edevice_factory" autocomplete="off" class="form-control" />
        </div>
        <div class="row">
            <div class="form-group col-md-6 text-left">
                  <label>Хэрэглэгчийн нэр</label>
                  <input type="text" id="edevice_country" name="edevice_country" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-6 text-left">
                  <label>Ip хаяг</label>
                  <input type="text" id="edevice_mdate" name="edevice_mdate" autocomplete="off" class="form-control" />
            </div>
            <div class="form-group col-md-12 text-Center" name="ecompanyName" autocomplete="off" class="form-control">
                  <label>Ашиглалтанд оруулсан</label>
                  <input type="date" id="edevice_udate" name="edevice_udate" autocomplete="off" class="form-control" />
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
