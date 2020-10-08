
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Хэрэглэгч Нэмэх</title>
		<meta name="description" content="User login page" />
    <link href="{{url('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url("public/computercount/css/center.css")}}"/>
  	<meta name="description" content="overview &amp; stats" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{url("public/assets/css/bootstrap.min.css")}}" />
  	<link rel="stylesheet" href="{{url("public/assets/font-awesome/4.5.0/css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{url("public/assets/css/fonts.googleapis.com.css")}}" />
    <link rel="stylesheet" href="{{url("public/assets/css/ace.min.css")}}" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="{{url("public/assets/css/ace-skins.min.css")}}" />
		<link rel="stylesheet" href="{{url("public/assets/css/ace-rtl.min.css")}}" />
    <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.core.css') }}" />
  	<link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.default.css') }}" />

	</head>
	<body class="admin">

       <div class="container">

        <div class="col-md-12" style="height:100px">
          <div class="col-md-4" style=" padding-top:100px">

                         <div class="login-container centerLogin2">
                              <div class="widget-body ">
                                <div class="widget-main">
																	<form method="POST" action="{{ action('AdminController@store') }}">
																			@csrf
																			<h4 class="header green lighter bigger">
																				<i class="ace-icon fa fa-users blue"></i>
																				Шинэ хэрэглэгч бүртгэх
																			</h4>

																			<div class="form-group row">
											                    <label for="name" class="col-md-4 col-form-label text-right">Нэр:</label>

											                    <div class="col-md-6">
											                        <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
																							<label class="block clearfix">
																								<span class="block input-icon input-icon-right">
																									<input id="name" type="text" name="name" value required autocomplete="name" class="form-control" placeholder="Нэр" />
																									<i class="ace-icon fa fa-envelope"></i>
																								</span>
																							</label>
											                        @error('name')
											                            <span class="invalid-feedback" role="alert">
											                                <strong>{{ $message }}</strong>
											                            </span>
											                        @enderror
											                    </div>
											                </div>
																			<div class="form-group row">
											                    <label for="email" class="col-md-4 col-form-label text-right">Цахим хаяг:</label>

											                    <div class="col-md-6">
											                        <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> -->
																							<label class="block clearfix">
																								<span class="block input-icon input-icon-right">
																									<input  id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" class="form-control" placeholder="Нэвтрэх нэр /хаяг/" />
																									<i class="ace-icon fa fa-user"></i>
																								</span>
																							</label>
											                        @error('email')
											                            <span class="invalid-feedback" role="alert">
											                                <strong>{{ $message }}</strong>
											                            </span>
											                        @enderror
											                    </div>
											                </div>
																			<div class="form-group row">
											                    <label for="password" class="col-md-4 col-form-label text-right">Нууц үг:</label>

											                    <div class="col-md-6">
											                        <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> -->
																							<label class="block clearfix">
																								<span class="block input-icon input-icon-right">
																									<input id="password" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password" aria-autocomplete="list" />
																									<i class="ace-icon fa fa-lock"></i>
																								</span>
																							</label>
											                        @error('password')
											                            <span class="invalid-feedback" role="alert">
											                                <strong>{{ $message }}</strong>
											                            </span>
											                        @enderror
											                    </div>
											                </div>
																			<div class="form-group row">
											                      <label for="password-confirm" class="col-md-4 col-form-label text-right">Нууц үгээ давтана уу:</label>

											                      <div class="col-md-6">
																							<label class="block clearfix">
																								<span class="block input-icon input-icon-right">
																									<input id="password-confirm" type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required autocomplete="new-password"/>
																									<i class="ace-icon fa fa-retweet"></i>
																								</span>
																							</label>
											                          <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->
											                      </div>
											                  </div>

											                  <div class="form-group row mb-0">
											                      <div class="col-md-6 col-md-offset-5">
											                          <button type="submit" class="btn btn-primary">
											                              Бүртгэх
											                          </button>
											                      </div>
											                  </div>
																	</form>



                                </div>
                              </div><!-- /.widget-body -->
                            </div><!-- /.signup-box -->
                          </div>
                          <div class="col-md-8" style=" height:100px; padding-top:150px; padding-left:20px">
                              <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="user_login12">
                                <thead class="thead-light">
                                  <tr>
                                    <th>Д/д</th>
                                    <th>Хэрэглэгчийн нэр</th>
                                    <th>Нэвтрэх нэр</th>
                                    <th>Бүртгүүлсэрн</th>
                                    <th>Шинэчилсэн</th>
                                  </tr>
                                </thead>
                            </table>
														<div>
															<button id="deleteUser" type="button" name="button" class="btn btn-danger">Устгах</button>
															<a href="http://localhost/computercount/home">
																<button id="back" type="button" name="button" class="btn btn-primary">Буцах</button>
															</a>
														</div>
                          </div>
                          </div>
                      </div>



	    <script type="text/javascript">
	      if('ontouchstart' in document.documentElement) document.write("<script src='{{url("public/assets/js/jquery.mobile.custom.min.js")}}'>"+"<"+"/script>");
      </script>
			<script src="{{url("public/assets/js/jquery-2.1.4.min.js")}}"></script>

	 	 	<script src="{{url("public/assets/js/bootstrap.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/ace-extra.min.js")}}"></script>
	 	 <script src="{{ asset('public/z-alert/js/alertify.min.js') }}"></script>

	 	 <script src="{{url("public/assets/js/jquery-ui.custom.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.ui.touch-punch.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.easypiechart.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.sparkline.index.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.flot.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.flot.pie.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/jquery.flot.resize.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/ace-elements.min.js")}}"></script>
	 	 <script src="{{url("public/assets/js/ace.min.js")}}"></script>
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
	</body>
  <script>
    var data4 ="{{url('/getDataTable4')}}";
		var child_tables_row12="";
		var deleteComputerID12 = "{{url("/computercount/delete12")}}";
    $(document).ready(function(){
      $('#user_login12').DataTable({
      // dom: 'Blfrtip',
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
                      "url": data4,
                      "type": "get"
                    },
               "columns": [
                 { data: "id", name: "id" },
                 { data: "name", name: "name"},
                 { data: "email", name: "email"},
                 { data: "created_at", name: "created_at"},
                 { data: "updated_at", name: "updated_at"},
                 ]
            });
						$('#user_login12').on( 'click', 'tr', function () {
											 var currow = $(this).closest('tr');
											 $('#user_login12 tbody tr').css("background-color", "white");
											 $('#user_login12 tbody tr').css("color", "black");
											 $(this).closest('tr').css("color", "white");
											 $(this).closest('tr').css("background-color", "#337ab7");
											 child_tables_row12 = $('#user_login12').DataTable().row(currow).data();
											 getChildTable12(child_tables_row12['id']);
											 });
									 });
					 $("#deleteUser").click(function(){
						 var csrf = "{{ csrf_token() }}";
											 if(child_tables_row12 == ""){
													 alertify.alert('Та Устгах мөрөө дарж сонгоно уу!!!');
													 return;
											 }
											 alertify.confirm( "Та устгахдаа итгэлтэй байна уу?", function (e) {
												 if (e) {
													 // var csrf = $('meta[name=csrf-token]').attr("content");
													 $.ajax({
															 type: 'POST',
															 url: deleteComputerID12,
															 // data: $("#formSun2").serialize()
															 data: {
																 _token: csrf,
																 id : child_tables_row12['id']
															 },
															 success:function(response){
																	 alertify.alert(response);
																	 location.reload();
																	 child_tables_row12="";
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
		function getChildTable12(id_5){

		    // $('#user_login12').dataTable().fnDestroy();
		    // $('#user_login12').DataTable( {
		    //   // dom: 'rt',  // lBfrtip Bfrtip Blfrtip
		    //  lengthMenu: [
		    //          [ 5, 10, 25, 50, 100, -1 ],
		    //          [ '5','10', '25', '50', '100', 'Show all' ]
		    //      ],
		    //      "language": {
		    //          "lengthMenu": "_MENU_ мөрөөр харах",
		    //          "zeroRecords": "Хайлт илэрцгүй байна",
		    //          "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
		    //          "infoEmpty": "Хайлт илэрцгүй",
		    //          "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
		    //          "sSearch": "Хайх: ",
		    //          "paginate": {
		    //            "previous": "Өмнөх",
		    //            "next": "Дараахи"
		    //          }
		    //      },
		    //        "processing": true,
		    //        "serverSide": true,
		    //        "ajax":{
				// 				         "url": data4,
				// 				         "type": "get",
		    //                  "data":{
		    //                   _token: $('meta[name="csrf-token"]').attr("content"),
		    //                    id: id_5
		    //                 }
		    //               },
		    //          "columns":  [
	      //            { data: "id", name: "id" },
	      //            { data: "name", name: "name"},
	      //            { data: "email", name: "email"},
	      //            { data: "created_at", name: "created_at"},
	      //            { data: "updated_at", name: "updated_at"},
	      //            ]
		    //       }).ajax.reload();
				//
		    //       $('#user_login12 tbody').on('click' , 'tr' ,function() {
		    //         var currow2 = $(this).closest('tr');
		    //         $('#user_login12 tbody tr').css("background-color", "white");
		    //         $('#user_login12 tbody tr').css("color", "black");
		    //         $(this).closest('tr').css("color", "white");
		    //         $(this).closest('tr').css("background-color", "#337ab7");
		    //         child_tables_row12 = $('#user_login12').DataTable().row(currow2).data();
		    //       });

		}
   </script>

</html>
