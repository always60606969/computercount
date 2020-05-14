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
var child_tables_row = "";
var csrf = "{{ csrf_token() }}";
var deleteComputerID = "{{url("/computercount/delete")}}";

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

          });
          $("#btnEditComputerTb").click(function(){
            if(child_tables_row == ""){
              alert("Select row")
              return;
            }
            $("#ID").val(child_tables_row["id"]);
              $("#device_name").val(child_tables_row["device_name"]);
                $("#device_cpu").val(child_tables_row["device_cpu"]);
                  $("#device_ram").val(child_tables_row["device_ram"]);
                    $("#device_capacity").val(child_tables_row["device_capacity"]);
                      $("#device_mark").val(child_tables_row["device_mark"]);
                        $("#device_keyboard").val(child_tables_row["device_keyboard"]);
                          $("#device_mouse").val(child_tables_row["device_mouse"]);
                            $("#device_desktop").val(child_tables_row["device_desktop"]);
                              $("#device_other").val(child_tables_row["device_other"]);
                                $("#device_system").val(child_tables_row["device_system"]);
                                  $("#device_user").val(child_tables_row["device_user"]);
                                    $("#device_adddate ").val(child_tables_row["device_adddate"]);
                                      $("#device_id").val(child_tables_row["device_id"]);
                                        $("#device_unit").val(child_tables_row["device_unit"]);
                                          $("#device_username").val(child_tables_row["device_username"]);
                                            $("#device_ip").val(child_tables_row["device_ip"]);
                                              $("#device_mac ").val(child_tables_row["device_mac"]);
                                                $("#device_factory").val(child_tables_row["device_factory"]);
                                                  $("#device_country").val(child_tables_row["device_country"]);
                                                    $("#device_mdate ").val(child_tables_row["device_mdate"]);
                                                      $("#device_udate").val(child_tables_row["device_udate"]);
            $("#updateexampleModalScrollable").modal("show");
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
                      data: {
                        _token: csrf,
                        id : child_tables_row['id']
                      },
                      success:function(response){
                          alertify.alert(response);
                          Refresh();
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
});

function getChildTable(id_){
  // alert(id_);
    $('#user_table2').dataTable().fnDestroy();
    $('#user_table2').DataTable( {
      dom: 'rt',  // lBfrtip Bfrtip Blfrtip
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

}
// refresh хийх function
function Refresh(){
  $('#user_table').dataTable().fnDestroy();
  $('#user_table').DataTable( {
    dom: 'Blfrtip',  // lBfrtip Bfrtip Blfrtip
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

// refresh хийх function

</script>
  Datatables
  @if (isset($msg))
    <div class="alert alert-success">
      <strong>{{$msg}}</strong>
    </div>
  @endif
  <div class="col-lg-12">
      <div class="table-responsive p-3">
        <table class="table" id="user_table">
          <thead class="thead-light">
            <tr>
              <th></th>
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
          <tfoot>
            <tr>
            </tr>
          </tfoot>
          <tbody>
          </tbody>
      </table>

    </div>
    <div class="clear-fix"></div>
    <div class="row text-center" >
      <button type="button" name="button" class="btn btn-warning" id="btnEditComputerTb">Засах</button>
      <button type="button" name="buttonDelete" class="btn btn-primary" id="btnDeleteComputerTb">Устгах</button>
    </div>
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
        </div>
      <div class="col-lg-6" >
        <table class="table" id="">
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
      @include("parts.add")

@endsection
