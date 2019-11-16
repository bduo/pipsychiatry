<?php

/*
File Name: header.php
Programmer: Brandon El Haj
*/

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<!-- Meta tag for mobile viewing -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

		<!-- Meta tags for browser tab favicon -->
		<meta name="msapplication-TileColor" content="#da532c">

		<meta name="theme-color" content="#ffffff">

		<title>Portland Integrative Psychiatry</title>

		<!-- Bootstrap.min CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<!-- Bootstrap-grid.min CSS -->
		<link rel="stylesheet" href="/css/bootstrap-grid.min.css">

		<!-- Reset CSS -->
		<link rel="stylesheet" href="/css/reset.css">

		<!-- Grid CSS --> 
		<link rel="stylesheet" href="/css/grid.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="/css/pip.css">

		<!-- Google Font --> 
		<link href="https://fonts.googleapis.com/css?family=Barlow:300,600,700%7CMontserrat:400,700" rel="stylesheet">

		<!-- Favicon Links for browser tab -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">

		<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">

		<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">

		<link rel="manifest" href="/assets/site.webmanifest">

		<link rel="mask-icon" href="/assets/safari-pinned-tab.svg" color="#5bbad5">

	 </head>

	<body>
	<!-- Header/Nav Section -->
	<header>
		<!-- pipscyh.com SVG logo with dimensions 40px by 40px -->
		<a href="https://www.pipsychiatry.com/index.php" id="logo"></a>
		<nav role="navigation">
			<!-- Mobile navigation hamburger menu -->
			<div class="bttn">
				<button class="hamburger">&#9776;</button>
				<button class="cross">&#735;</button>
			</div>	
			<!-- Primary navigation links -->
			<div class="menu">
				<ul>
					<li><a href="https://www.pipsychiatry.com/index.php">HOME</a></li>
					<li><a href="https://www.pipsychiatry.com/team.php">TEAM</a></li>
					<li><a href="https://www.pipsychiatry.com/services.php">SERVICES</a></li>
					<li><a href="https://www.pipsychiatry.com/resources.php">RESOURCES</a></li>
					<li><a href="https://www.pipsychiatry.com/contact.php">CONTACT</a></li>
					<li id="bot_space_green"><a href="https://www.pipsychiatry.com/location.php">LOCATION</a></li>
					<!-- Mobile messenging apps added to navigation -->
					<li class="nav_apps"><a href="https://app.sprucehealth.com/login" id="green_type_spruce"><span id="thin_mobile_spruce">Spruce</span><br><span class="bottom_line">Messenger</span></a></li>
					<li class="nav_apps"><a href="https://www.valantmed.com/Portal/PortlandIntegrativePsychiatry" id="green_type_valant"><span id="thin_mobile_valant">Valant</span><br><span class="bottom_line">Patient Portal</span></a></li>
					<li class="nav_apps"><a href="https://www.navicurepayments.com/pip/pay#!/" id="green_type_payments"><span class="bottom_line">Payments</span></a></li>
				</ul>
				<div class="bot_space_beige"></div>
			</div>
		</nav>
	</header>
