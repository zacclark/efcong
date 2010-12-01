<?php
session_start();
if ($_SESSION['logged_in']) {
	$logged_in_user = true;
}else{
	$logged_in_user = false;
}
require("database/config.php");
mysql_connect($host, $user, $password); 
mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	

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
			
			<?php 
			$query = "SELECT * FROM pages";
			$result = mysql_query($query);
			echo mysql_error();			
		  	?>
			<div id="titleBox">
				<h1>Education Foundation for the Colorado National Guard</h1>
				<ul class="linkList">
					<?php while($row = mysql_fetch_array($result))
					{
					?>
						<li class = "link"><a href="/<?php echo $row['slug']; ?>"><?php echo $row['name']; ?></a></li>
					<?php } ?>
				</ul>
			</div>
			
			<div id="imageBox"></div>

			