<?php
session_start();
if ($_SESSION['logged_in']) {
	$logged_in_user = true;
}else{
	$logged_in_user = false;
}
?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Education Foundation for the Colorado National Guard<?php if($logged_in_user){echo " (logged in)";}?></title>
		<link rel="stylesheet" type="text/css" href="/stylesheets/core.css" />
	</head>
	
	<body>
		<div id="container">
			
			<?php if($logged_in_user){ ?>
				
				<div id="actionbar">
					<p>You are logged in to EFCONG website administration.</p>
					<ul class="links">
						<li><a href="/logout.php">Logout</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				
			<?php } ?>
		  
			<div id="titleBox">
				<h1>Education Foundation for the Colorado National Guard</h1>
				<ul class="linkList">
					<li class="link"><a href="/">Home</a></li>
					<li class="link"><a href="/news">News</a></li>
					<li class="link"><a href="/scholarship">Scholarship</a></li>
					<li class="link"><a href="/history">History</a></li>
					<li class="link"><a href="/donate">Donate</a></li>
					<li class="link"><a href="/contact">Contact Us</a></li>
				</ul>
			</div>
			
			<div id="imageBox"></div>

			