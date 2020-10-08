@extends('mainPanel.mainPanel')
@section('content')
  <!-- Datatables -->
      <link href="{{url('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

  <script>
    var getDataTable ="{{url('/getDataTable')}}";
          $(document).ready(function() {
            $('#user_table').DataTable( {
            //  dom: 'Blfrtip',  // lBfrtip Bfrtip Blfrtip
             lengthMenu: [
                     [ 5, 10, -1 ],
                     [ '5','10' ]
                 ],
                 "language": {
                     "lengthMenu": "_MENU_ мөрөөр харах",
                     "zeroRecords": "Хайлт илэрцгүй байна",
                     "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
                     "infoEmpty": "Хайлт илэрцгүй",
                     "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
                     "sSearch": "Хайх: ",
                     "paginate": {
                       "previous": "Өмнөх",
                       "next": "Дараахи"
                     }
                 },
                   "processing": true,
                   "serverSide": true,
                   "ajax":{
                            "url": getDataTable,
                            "type": "get"
                          },
                     "columns": [
                       { data: "id", name: "id" },
                       { data: "device_name", name: "device_name"},
                       { data: "device_cpu", name: "device_cpu"},
                       { data: "device_ram", name: "device_ram"},
                       { data: "device_capacity", name: "device_capacity"},
                       { data: "device_mark", name: "device_mark" },
                       { data: "device_keyboard", name: "device_keyboard"},
                       { data: "device_mouse", name: "device_mouse"},
                       { data: "device_desktop", name: "device_desktop"},
                       { data: "device_other", name: "device_other"},
                       { data: "device_system", name: "device_system" },
                       { data: "device_user", name: "device_user"},
                       { data: "device_adddate", name: "device_adddate"},
                       { data: "device_id", name: "device_id"},
                       { data: "device_unit", name: "device_unit"},
                       { data: "device_username", name: "device_username" },
                       { data: "device_ip", name: "device_ip"},
                       { data: "device_mac", name: "device_mac"},
                       { data: "device_factory", name: "device_factory"},
                       { data: "device_country", name: "device_country"},
                       { data: "device_mdate", name: "device_mdate"},
                       { data: "device_udate", name: "device_udate"}
                       ]
                  });
               });
   </script>

{{-- // Баганаас утга авах --}}
<script type="text/javascript">
var getDataTable2 ="{{url('/getDataTable2')}}";
var getDataTable3 = "{{url('/getDataTable3')}}";
var child_tables_row = "";
var child_tables_row2 = "";
var child_tables_row3="";
var csrf = "{{ csrf_token() }}";
var deleteComputerID = "{{url("/computercount/delete")}}";
var deleteComputerID2 = "{{url("/computercount/delete2")}}";
var deleteComputerID3 = "{{url("/computercount/delete3")}}";

$(document).ready(function(){
  $('#user_table tbody').on( 'click', 'tr', function () {
              var currow = $(this).closest('tr');
              $('#user_table tbody tr').css("background-color", "white");
              $('#user_table tbody tr').css("color", "black");
              $(this).closest('tr').css("color", "white");
              $(this).closest('tr').css("background-color", "#337ab7");
              child_tables_row = $('#user_table').DataTable().row(currow).data();
       // Баганаас утга авах
              // alert(child_tables_row["id"]);
              getChildTable(child_tables_row['id']);
              getChildTable2(child_tables_row['id']);


          });

          $("#btnEditComputerTb").click(function(){
            if(child_tables_row == ""){
              alert("Select row")
              return;
            }
            $("#eid").val(child_tables_row["id"]);
              $("#edevice_name").val(child_tables_row["device_name"]);
                $("#edevice_cpu").val(child_tables_row["device_cpu"]);
                  $("#edevice_ram").val(child_tables_row["device_ram"]);
                    $("#edevice_capacity").val(child_tables_row["device_capacity"]);
                      $("#edevice_mark").val(child_tables_row["device_mark"]);
                        $("#edevice_keyboard").val(child_tables_row["device_keyboard"]);
                          $("#edevice_mouse").val(child_tables_row["device_mouse"]);
                            $("#edevice_desktop").val(child_tables_row["device_desktop"]);
                              $("#edevice_other").val(child_tables_row["device_other"]);
                                $("#edevice_system").val(child_tables_row["device_system"]);
                                  $("#edevice_user").val(child_tables_row["device_user"]);
                                    $("#edevice_adddate ").val(child_tables_row["device_adddate"]);
                                      $("#edevice_id").val(child_tables_row["device_id"]);
                                        $("#edevice_unit").val(child_tables_row["device_unit"]);
                                          $("#edevice_username").val(child_tables_row["device_username"]);
                                            $("#edevice_ip").val(child_tables_row["device_ip"]);
                                              $("#edevice_mac ").val(child_tables_row["device_mac"]);
                                                $("#edevice_factory").val(child_tables_row["device_factory"]);
                                                  $("#edevice_country").val(child_tables_row["device_country"]);
                                                    $("#edevice_mdate ").val(child_tables_row["device_mdate"]);
                                                      $("#edevice_udate").val(child_tables_row["device_udate"]);
            $("#updateexampleModalScrollable").modal("show");
          });

          $("#zasahBtn").click(function(){
            if(child_tables_row2 ==""){
              alert("Засах мөрөө сонгоно уу!!!")
              return;
            }
          $("#eid2").val(child_tables_row2["id"]);
            $("#ei_date").val(child_tables_row2["i_date"]);
              $("#ei_programms").val(child_tables_row2["i_programms"]);
                $("#ecomID").val(child_tables_row["id"]);
                  $("#updateexampleModalScrollable2").modal("show");
          });

           $('#zasahBtn2').click(function(){
             if(child_tables_row3==""){
               alert("Засах мөрөө сонгоно уу!!!")
               return;
             }
             $("#eid3").val(child_tables_row3["id"]);
              $("#eh_date").val(child_tables_row3["h_date"]);
                $("#eh_reason").val(child_tables_row3["h_reason"]);
                  $("#eh_give").val(child_tables_row3["h_give"]);
                    $("#eh_recieve").val(child_tables_row3["h_recieve"]);
                      $("#ecomID2").val(child_tables_row["id"]);
                       $("#updateexampleModalScrollable3").modal("show");
           });
          $('#nemehBtn').click(function(){
            $("#comID2").val(child_tables_row["id"]);
              $("#exampleModalScrollable2").modal("show");
          });

          $('#nemehBtn2').click(function(){
            $("#comID3").val(child_tables_row["id"]);
              $("#exampleModalScrollable3").modal("show");
          });

// Delete Function
          $("#btnDeleteComputerTb").click(function(){
              if(child_tables_row == ""){
                  alertify.alert('Та Устгах мөрөө дарж сонгоно уу!!!');
                  return;
              }
              alertify.confirm( "Та устгахдаа итгэлтэй байна уу?", function (e) {
                if (e) {
                  // var csrf = $('meta[name=csrf-token]').attr("content");
                  $.ajax({
                      type: 'POST',
                      url: deleteComputerID,
                      // data: $("#formSun2").serialize()
                      data: {
                        _token: csrf,
                        id : child_tables_row['id']
                      },
                      success:function(response){
                          alertify.alert(response);
                          location.reload();
                          child_tables_row="";
                      },
                      error: function(XMLHttpRequest, textStatus, errorThrown) {
                          alertify.error("Status: " + textStatus); alertify.error("Error: " + errorThrown);
                      }
                  })
                }
                 else {
                 alertify.error('Устгах үйлдэл цуцлагдлаа.');
                }

              });
          });

          $("#ustgahBtn").click(function(){
            if(child_tables_row2 == ""){
                alertify.alert('Та Устгах мөрөө дарж сонгоно уу!!!');
                return;
            }
            alertify.confirm( "Та устгахдаа итгэлтэй байна уу?", function (e) {
              if (e) {
                // var csrf = $('meta[name=csrf-token]').attr("content");
                $.ajax({
                    type: 'POST',
                    url: deleteComputerID2,
                    data: {
                      _token: csrf,
                      id : child_tables_row2['id']
                    },
                    success:function(response){
                        alertify.alert(response);
                        Refresh2();

                        child_tables_row2="";
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alertify.error("Status: " + textStatus); alertify.error("Error: " + errorThrown);
                    }
                })
              }
               else {
               alertify.error('Устгах үйлдэл цуцлагдлаа.');
              }
            });
          });
          $("#ustgahBtn2").click(function(){
            if(child_tables_row3 == ""){
                alertify.alert('Та Устгах мөрөө дарж сонгоно уу!!!');
                return;
            }
            alertify.confirm( "Та устгахдаа итгэлтэй байна уу?", function (e) {
              if (e) {
                // var csrf = $('meta[name=csrf-token]').attr("content");
                $.ajax({
                    type: 'POST',
                    url: deleteComputerID3,
                    data: {
                      _token: csrf,
                      id : child_tables_row3['id']
                    },
                    success:function(response){
                        alertify.alert(response);
                        Refresh2();

                        child_tables_row3="";
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alertify.error("Status: " + textStatus); alertify.error("Error: " + errorThrown);
                    }
                })
              }
               else {
               alertify.error('Устгах үйлдэл цуцлагдлаа.');
              }
            });
          });
});

// DataTable2
function getChildTable(id_){

    $('#user_table2').dataTable().fnDestroy();
    $('#user_table2').DataTable( {
      // dom: 'rt',  // lBfrtip Bfrtip Blfrtip
     lengthMenu: [
             [ 5, 10, 25, 50, 100, -1 ],
             [ '5','10', '25', '50', '100', 'Show all' ]
         ],
         "language": {
             "lengthMenu": "_MENU_ мөрөөр харах",
             "zeroRecords": "Хайлт илэрцгүй байна",
             "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
             "infoEmpty": "Хайлт илэрцгүй",
             "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
             "sSearch": "Хайх: ",
             "paginate": {
               "previous": "Өмнөх",
               "next": "Дараахи"
             }
         },
           "processing": true,
           "serverSide": true,
           "ajax":{
                    "url": getDataTable2,
                    "type": "get",
                    "data":{
                      _token: csrf,
                      id: id_
                    }
                  },
             "columns": [
               { data: "id", name: "id" },
               { data: "i_date", name: "i_date"},
               { data: "i_programms", name: "i_programms"},
               ]
          }).ajax.reload();

          $('#user_table2 tbody').on('click' , 'tr' ,function() {
            var currow2 = $(this).closest('tr');
            $('#user_table2 tbody tr').css("background-color", "white");
            $('#user_table2 tbody tr').css("color", "black");
            $(this).closest('tr').css("color", "white");
            $(this).closest('tr').css("background-color", "#337ab7");
            child_tables_row2 = $('#user_table2').DataTable().row(currow2).data();
          });

}

// DataTable2
function getChildTable2(id_2){
   // alert(getDataTable3);

    $('#user_table3').dataTable().fnDestroy();
    $('#user_table3').DataTable( {
      // dom: 'rt',  // lBfrtip Bfrtip Blfrtip
     lengthMenu: [
             [ 5, 10, 25, 50, 100, -1 ],
             [ '5','10', '25', '50', '100', 'Show all' ]
         ],
         "language": {
             "lengthMenu": "_MENU_ мөрөөр харах",
             "zeroRecords": "Хайлт илэрцгүй байна",
             "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
             "infoEmpty": "Хайлт илэрцгүй",
             "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
             "sSearch": "Хайх: ",
             "paginate": {
               "previous": "Өмнөх",
               "next": "Дараахи"
             }
         },
           "processing": true,
           "serverSide": true,
           "ajax":{
                    "url": getDataTable3,
                    "type": "get",
                    "data":{
                      _token: csrf,
                      id: id_2
                    }
                  },
             "columns": [
               { data: "id", name: "id" },
               { data: "h_date", name: "h_date"},
               { data: "h_reason", name: "h_reason"},
               { data: "h_give", name: "h_give"},
               { data: "h_recieve", name: "h_recieve"}
               ]
          }).ajax.reload();

          $('#user_table3 tbody').on( 'click', 'tr', function () {
            var currow = $(this).closest('tr');
            $('#user_table3 tbody tr').css("background-color", "white");
            $('#user_table3 tbody tr').css("color", "black");
            $(this).closest('tr').css("color", "white");
            $(this).closest('tr').css("background-color", "#337ab7");
            child_tables_row3 = $('#user_table3').DataTable().row(currow).data();
            });



}
// refresh хийх function
// function Refresh(){
//   alert(getDataTable);
// }
function Refresh(){
  $('#user_table').dataTable().fnDestroy();
  $('#user_table').dataTable({
    dom: 'Blfrtip',  // lBfrtip Bfrtip Blfrtip
   lengthMenu: [
           [ 5,  -1 ],
           [ '5','10', 'Show all' ]
       ],
       "language": {
           "lengthMenu": "_MENU_ мөрөөр харах",
           "zeroRecords": "Хайлт илэрцгүй байна",
           "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
           "infoEmpty": "Хайлт илэрцгүй",
           "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
           "sSearch": "Хайх: ",
           "paginate": {
             "previous": "Өмнөх",
             "next": "Дараахи"
           }
       },
         "processing": true,
         "serverSide": true,
         "ajax":{
                  "url": getDataTable,
                  "type": "get"
                },
           "columns": [
             { data: "id", name: "id" },
             { data: "device_name", name: "device_name"},
             { data: "device_cpu", name: "device_cpu"},
             { data: "device_ram", name: "device_ram"},
             { data: "device_capacity", name: "device_capacity"},
             { data: "device_mark", name: "device_mark" },
             { data: "device_keyboard", name: "device_keyboard"},
             { data: "device_mouse", name: "device_mouse"},
             { data: "device_desktop", name: "device_desktop"},
             { data: "device_other", name: "device_other"},
             { data: "device_system", name: "device_system" },
             { data: "device_user", name: "device_user"},
             { data: "device_adddate", name: "device_adddate"},
             { data: "device_id", name: "device_id"},
             { data: "device_unit", name: "device_unit"},
             { data: "device_username", name: "device_username" },
             { data: "device_ip", name: "device_ip"},
             { data: "device_mac", name: "device_mac"},
             { data: "device_factory", name: "device_factory"},
             { data: "device_country", name: "device_country"},
             { data: "device_mdate", name: "device_mdate"},
             { data: "device_udate", name: "device_udate"}
             ]
        }).ajax.reload();

}
function Refresh2(){

      $('#user_table2').dataTable().fnDestroy();
      $('#user_table2').DataTable( {
        // dom: 'rt',  // lBfrtip Bfrtip Blfrtip
       lengthMenu: [
               [ 5, 10, 25, 50, 100, -1 ],
               [ '5','10', '25', '50', '100', 'Show all' ]
           ],
           "language": {
               "lengthMenu": "_MENU_ мөрөөр харах",
               "zeroRecords": "Хайлт илэрцгүй байна",
               "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
               "infoEmpty": "Хайлт илэрцгүй",
               "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
               "sSearch": "Хайх: ",
               "paginate": {
                 "previous": "Өмнөх",
                 "next": "Дараахи"
               }
           },
             "processing": true,
             "serverSide": true,
             "ajax":{
                      "url": getDataTable2,
                      "type": "get",
                      "data":{
                        _token: csrf,
                        id: id_
                      }
                    },
               "columns": [
                 { data: "id", name: "id" },
                 { data: "i_date", name: "i_date"},
                 { data: "i_programms", name: "i_programms"},
                 ]
            }).ajax.reload();
                alert("asdasd");
}
// refresh хийх function
</script>
  Datatables
  @if (isset($msg))
    <div class="alert alert-success">
      <strong>{{$msg}}</strong>
    </div>
  @endif
  <style >
    @media print {
      body{
        visibility: hidden;
      }
      #user_table
      {
        width: 100%;
        height: 100%;
        border: solid;
        table-layout: fixed;
        visibility: visible;
      }
      #zailaa
      {
        visibility: visible;
      }
    }
  </style>
  <div class="col-lg-12">
      <div class="table-responsive p-3">
        <h3 id="zailaa">asdasdasdasd</h3>
        <table class="table" id="user_table">
          <thead class="thead-light">
            <tr>
              <th></th>
              <th>Техник хэрэгсэл нэр</th>
              <th>CPU /GB/</th>
              <th>RAM /GB/</th>
              <th>Hard Disk Хэмжээ</th>
              <th>Hard Disk Марк</th>
              <th>Гар /ширхэг/</th>
              <th>Хулгана /ширхэг/</th>
              <th>Дэлгэц /ширхэг/</th>
              <th>Бусад</th>
              <th>Үйлдлийн систем</th>
              <th>Хэрэглэгчийн нэр</th>
              <th>Огноо</th>
              <th>Хувийн дугаар</th>
              <th>Анги, байгууллага</th>
              <th>Хэрэглэгчийн нэр</th>
              <th>Ip хаяг</th>
              <th>Mac хаяг</th>
              <th>Үйлдвэрлэсэн үйлдвэрийн дугаар</th>
              <th>Хэрэглэгчийн нэр</th>
              <th>Ip хаяг</th>
              <th>Ашиглалтанд оруулсан</th>
            </tr>
          </thead>
      </table>

    </div>
    <div class="clear-fix"></div>

  </div>
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-6">
        <table class="table" id="user_table2">
          <thead class="thead-light">
          <tr>
            <th>Д/д</th>
            <th>Суулгасан огноо</th>
            <th>Программын нэр</th>
          </tr>
          </thead>
        </table>
        <div class="row text-center" >
          <button type="button" name="button" class="btn btn-danger" id="nemehBtn">Нэмэх</button>
          <button type="button" name="button" class="btn btn-warning" id="zasahBtn">Засах</button>
          <button type="button" name="buttonDelete" class="btn btn-primary" id="ustgahBtn">Устгах</button>
          <button onclick="window.print();">print</button>
        </div>
        </div>
      <div class="col-lg-6" >
        <table class="table" id="user_table3">
          <thead class="thead-light">
            <tr>
              <th>д/д</th>
              <th>Хүлээн авсан огноо</th>
              <th>Шалтгаан</th>
              <th>Хүлээн авсан</th>
              <th>Хүлээн авсан огноо</th>
          </tr>
          </thead>
      </table>
      <div class="row text-center" >
        <button type="button" name="button" class="btn btn-danger" id="nemehBtn2">Нэмэх</button>
        <button type="button" name="button" class="btn btn-warning" id="zasahBtn2" >Засах</button>
        <button type="button" name="buttonDelete" class="btn btn-primary" id="ustgahBtn2">Устгах</button>
      </div>
      </div>
      </div>
    </div>
    </div>
   <script type="text/javascript">
    $(document).ready(function(){
    })
  </script>
  <!-- Datatables -->
      <script src="{{url('public/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
      <script src="{{url('public/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{url('public/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{url('public/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
      @include("parts.update")
      @include("parts.update2")
      @include("parts.update3")
      @include("parts.add")
      @include("parts.add2")
      @include("parts.add3")
      {{-- @include("home") --}}


@endsection
