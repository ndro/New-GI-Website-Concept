<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator - Gebrak Indonesia</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/admin_bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
	<link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet">
	@yield('addoncss')

    <!-- Custom Fonts -->
	<link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="skin-black">

    <!-- header logo: style can be found in header.less -->
	<header class="header">
		<a href="{{ action('HomeController@getIndex') }}" class="logo">
			<!-- Add the class icon to your logo image or logo icon to add the margining -->
			Gebrak Indonesia
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->
					<li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 4 messages</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li><!-- start message -->
										<a href="#">
											<div class="pull-left">
												<img src="{{ asset('/img/avatar3.png') }}" class="img-circle" alt="User Image"/>
												
											</div>
											<h4>
												Support Team
												<small><i class="fa fa-clock-o"></i> 5 mins</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li><!-- end message -->
									<li>
										<a href="#">
											<div class="pull-left">
												<img src="{{ asset('/img/avatar2.png') }}" class="img-circle" alt="User Image"/>
											</div>
											<h4>
												AdminLTE Design Team
												<small><i class="fa fa-clock-o"></i> 2 hours</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-left">
												<img src="{{ asset('/img/avatar.png') }}" class="img-circle" alt="User Image"/>
											</div>
											<h4>
												Developers
												<small><i class="fa fa-clock-o"></i> Today</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-left">
												<img src="{{ asset('/img/avatar2.png') }}" class="img-circle" alt="User Image"/>
											</div>
											<h4>
												Sales Department
												<small><i class="fa fa-clock-o"></i> Yesterday</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="pull-left">
												<img src="{{ asset('/img/avatar.png') }}" class="img-circle" alt="User Image"/>
											</div>
											<h4>
												Reviewers
												<small><i class="fa fa-clock-o"></i> 2 days</small>
											</h4>
											<p>Why not buy a new awesome theme?</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">See All Messages</a></li>
						</ul>
					</li>
					<!-- Notifications: style can be found in dropdown.less -->
					<li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-warning"></i>
							<span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 10 notifications</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li>
										<a href="#">
											<i class="ion ion-ios7-people info"></i> 5 new members joined today
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-users warning"></i> 5 new members joined
										</a>
									</li>

									<li>
										<a href="#">
											<i class="ion ion-ios7-cart success"></i> 25 sales made
										</a>
									</li>
									<li>
										<a href="#">
											<i class="ion ion-ios7-person danger"></i> You changed your username
										</a>
									</li>
								</ul>
							</li>
							<li class="footer"><a href="#">View all</a></li>
						</ul>
					</li>
					<!-- Tasks: style can be found in dropdown.less -->
					<li class="dropdown tasks-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-tasks"></i>
							<span class="label label-danger">9</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 9 tasks</li>
							<li>
								<!-- inner menu: contains the actual data -->
								<ul class="menu">
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Design some buttons
												<small class="pull-right">20%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">20% Complete</span>
												</div>
											</div>
										</a>
									</li><!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Create a nice theme
												<small class="pull-right">40%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">40% Complete</span>
												</div>
											</div>
										</a>
									</li><!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Some task I need to do
												<small class="pull-right">60%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
										</a>
									</li><!-- end task item -->
									<li><!-- Task item -->
										<a href="#">
											<h3>
												Make beautiful transitions
												<small class="pull-right">80%</small>
											</h3>
											<div class="progress xs">
												<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</a>
									</li><!-- end task item -->
								</ul>
							</li>
							<li class="footer">
								<a href="#">View all tasks</a>
							</li>
						</ul>
					</li>
					<li class="dropdown user user-menu">
						<a href="{{ action('AdminController@getAll') }}" class="dropdown-toggle">
							<i class="fa fa-user"></i>
							Management Account
						</a>
					</li>
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i>
							<span>Profile <i class="caret"></i></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header bg-light-blue">
								<img src="{{ asset('/img/user.jpg') }}" class="img-circle" alt="User Image"/>
								<p>
									{{ $user }} - Web Developer
									<small>Member since Nov. 2012</small>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="#" class="btn btn-default btn-flat">Profile</a>
								</div>
								<div class="pull-right">
									<a href="{{ action('Auth\AuthController@getLogout') }}">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="left-side sidebar-offcanvas">                
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="{{ asset('/img/user.jpg') }}" class="img-circle" alt="User Image"/>
					</div>
					<div class="pull-left info">
						<p>Hello, {{ $user }}</p>

						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search Event..."/>
						<span class="input-group-btn">
							<button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="{{ isset($nav_dashboard) ? 'active' : '' }}">
						<a href="{{ action('AdminController@getIndex') }}">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<li class="{{ isset($nav_new_post) ? 'active' : '' }}">
						<a href="{{ action('PostController@getCreatePost') }}">
							<i class="fa fa-edit"></i> <span>New Post</span>
						</a>
					</li>
					<li class="treeview {{ isset($nav_post) ? 'active' : '' }}">
						<a href="#">
							<i class="fa fa-clipboard"></i> <span>Post</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="{{ isset($nav_list_post) ? 'active' : '' }}">
								<a href="{{ action('PostController@getIndex') }}"><i class="fa fa-angle-double-right"></i> List Unpublished Post</a>
							</li>
							<li class="{{ isset($nav_pub_post) ? 'active' : '' }}">
								<a href="{{ action('PostController@getPublishedPost') }}"><i class="fa fa-angle-double-right"></i> List Published Post</a>
							</li>
							<li class="{{ isset($nav_del_post) ? 'active' : '' }}">
								<a href="{{ action('PostController@getDeletedPost') }}"><i class="fa fa-angle-double-right"></i> List Deleted Post</a>
							</li>
						</ul>
					</li>
					<li class="{{ isset($nav_category) ? 'active' : '' }}">
						<a href="{{ action('CategoryController@getIndex') }}">
							<i class="fa fa-tags"></i> <span>Category</span>
						</a>
					</li>
					<li class="treeview {{ isset($nav_event) ? 'active' : '' }}">
						<a href="#">
							<i class="fa fa-star-o"></i> <span>Event</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li class="{{ isset($nav_list_event) ? 'active' : '' }}">
								<a href="{{ action('EventController@getIndex') }}"><i class="fa fa-angle-double-right"></i> List Unpublished Event</a>
							</li>
							<li class="{{ isset($nav_pub_event) ? 'active' : '' }}">
								<a href="{{ action('EventController@getPublishedEvent') }}"><i class="fa fa-angle-double-right"></i> List Published Event</a>
							</li>
							<li class="{{ isset($nav_new_event) ? 'active' : '' }}">
								<a href="{{ action('EventController@getCreateEvent') }}"><i class="fa fa-angle-double-right"></i> New Event</a>
							</li>
						</ul>
					</li>
					<li class="{{ isset($nav_calendar) ? 'active' : '' }}">
						<a href="#">
							<i class="fa fa-calendar"></i> <span>Calendar</span>
							<small class="badge pull-right bg-red">3</small>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Right side column. Contains the navbar and content of the page -->
		<aside class="right-side">                
			@yield('content')
		</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/AdminLTE/app.js') }}" type="text/javascript"></script>
	
	<!-- Other JavaScript -->
	@yield('addonjs')

</body>

</html>
