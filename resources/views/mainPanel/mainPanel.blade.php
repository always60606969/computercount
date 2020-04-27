<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Ace Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
{{-- Ehend oruulah --}}
		<script src="{{url("public/assets/js/jquery-2.1.4.min.js")}}"></script>
		{{-- Ehend oruulah --}}
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{url("public/assets/css/bootstrap.min.css")}}" />
		<link rel="stylesheet" href="{{url("public/assets/font-awesome/4.5.0/css/font-awesome.min.css")}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{url("public/assets/css/fonts.googleapis.com.css")}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{url("public/assets/css/ace.min.css")}}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{url("public/assets/css/ace-skins.min.css")}}" />
		<link rel="stylesheet" href="{{url("public/assets/css/ace-rtl.min.css")}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ asset('public/z-alert/js/alertify.min.js') }}"></script>
		<script src="{{url("public/assets/js/ace-extra.min.js")}}"></script>
		<!--Zagvarlag alert-->
    <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.core.css') }}" />
  	<link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.default.css') }}" />

    <!--Zagvarlag alert-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default  ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-desktop"></i>
							Компьютер бүртгэлийн программ
						</small>
					</a>
				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey"></span>
							</a>
							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
								</li>
								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
									</ul>
								</li>
								<li class="dropdown-footer">
								</li>
							</ul>
						</li>
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"></span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-footer">
								</li>
							</ul>
						</li>
						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"></span>
							</a>

						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{url("public/computercount/images/avatars/user.jpg")}}" alt="" />
								<span class="user-info">
									<small>Welcome</small>

								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			<div id="sidebar" class="sidebar  responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable" >
							<i class="ace-icon glyphicon-plus "></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<script type="text/javascript">
					$(document).ready(function(){
						$('#mainMenu').click(function(){

						})
					})
				</script>
				<ul class="nav nav-list">
					{{-- Үндсэн цэс --}}
					<li class="active">
						<a href="{{url('computercount/')}}">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text" id="mainMenu"> Үндсэн цэс</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="calendar.html">
							<i class="menu-icon fa fa-calendar"></i>
							<span class="menu-text">
								Calendar
							<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
					<div class="page-content">
						<div class="row">
									<div class="col-sm-12">
                          <div class="row">
														  @yield('content')
          								</div>
										</div><!-- /.widget-box -->
								</div><!-- /.row -->
							</div><!-- /.row -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
    <!-- basic scripts -->

    		<!--[if !IE]> -->


    		<!-- <![endif]-->

    		<!--[if IE]>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
    		<script type="text/javascript">
    			if('ontouchstart' in document.documentElement) document.write("<script src='{{url("public/assets/js/jquery.mobile.custom.min.js")}}'>"+"<"+"/script>");
    		</script>
    		<script src="{{url("public/assets/js/bootstrap.min.js")}}"></script>

    		<!-- page specific plugin scripts -->

    		<!--[if lte IE 8]>
    		  <script src="assets/js/excanvas.min.js"></script>
    		<![endif]-->
    		<script src="{{url("public/assets/js/jquery-ui.custom.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.ui.touch-punch.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.easypiechart.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.sparkline.index.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.flot.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.flot.pie.min.js")}}"></script>
    		<script src="{{url("public/assets/js/jquery.flot.resize.min.js")}}"></script>

    		<!-- ace scripts -->
    		<script src="{{url("public/assets/js/ace-elements.min.js")}}"></script>
    		<script src="{{url("public/assets/js/ace.min.js")}}"></script>


	</body>
</html>
