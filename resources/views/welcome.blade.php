<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="{{URL::asset('css/welcome.css')}}">
	<!-- ROBOTO FONT --->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<!-- MATERIAL ICONS --->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
	<div class="grid-container">
		<!-- Header --->
		<Header class="header">
		  <div class="menu-icon" onclick="openSideBar()">
		  <span class="material-icons-outlined">menu</span>
		  </div>
		  <div class="header-left">
		  	<span class="material-icons-outlined">search</span>
		  </div>
		  <div class="header-right">
			<span class="material-icons-outlined">notifications</span>
			<span class="material-icons-outlined">email</span>
			<span class="material-icons-outlined">account_circle</span>
		  </div>
		  </Header>
		<!-- End Header --->

		<!-- Sidebar--->
		<aside id="sidebar">
			<div class="sidebar-title">
				<div class="sidebar-brand">
				<span class="material-icons-outlined">event</span>
				</div>
				<span class="material-icons-outlined" onclick="closeSidebar()">close</span>
			</div>
			<ul class="sidebar-list">
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">dashboard</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">Events</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">Tickets</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">payment</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">Manage Accounts</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">Change Password</span>
				</li>
				<li class="sidebar-list-item">
				<span class="material-icons-outlined">logout</span>
				</li>
			</ul>
		</aside>
		<!-- End Sidebar--->


		<!-- Main--->
		<main class="main-container"></main>
		<!-- End Main--->
	</div>
	<script src="{{URL::asset('js/welcome.js')}}"></script>
</body>
</html>