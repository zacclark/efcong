<?php require('templates/header.php'); ?>
			
	<?php
	
	require("database/config.php");

	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$path = $_GET["path"];
	$query = "SELECT * FROM pages";
	$result = mysql_query($query);
	?>
	<?php 
	while($row = mysql_fetch_array($result))
	{
		if($row["slug"] == $path || $path == "")
		{?>
			<div id = "contentBox">
				<h2><?php echo $row["name"]; ?></h2>
				<div class="inner">
					<?php echo $row["body"]; ?>
				</div>
			</div>
		<?php
			break;
		}
	}
	echo mysql_error();
	?>
	
<?php require('templates/footer.php'); ?>