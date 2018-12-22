<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>admin calisthenics</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar fixed-layout">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.php" class="logo"><img alt="logo" src="assets/images/logo.png" /> <span>Manage</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <a href="../index.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Home</span>
                                </a>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar fixed-layout">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a class="" href="index.php"><i class="fa fa-fw fa-area-chart"></i><span> Dashboard </span> </a>
                    </li>
					
					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="tables-basic.php">Basic Tables</a></li>
								<li><a href="tables-datatable.php">Data Tables</a></li>
							</ul>
                    </li>
					
                    <li class="submenu">
                        <a href="manage_post.php"><i class="fa fa-fw fa-newspaper-o"></i><span> Post </span></a>	
                    </li>

                    <li class="submenu">
                        <a href=""><i class="fa fa-fw fa-beer"></i><span> Excercise </span></a>	
                    </li>

                    <li class="submenu">
                        <a target="_blank" href="page-coming-soon.php"><i class="fa fa-fw fa-clock-o"></i><span> Countdown funny </span></a>	
                    </li>

					<li class="submenu">
                        <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">								
								<li><a href="pro-profile.php">My Profile</a></li>
                                <li><a href="pro-users.php">Users</a></li>
                                <li><a href="pro-articles.php">Articles</a></li>
								<li><a href="pro-slider.php">Slider</a></li>
                            </ul>
                    </li>
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->