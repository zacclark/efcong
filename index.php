<?php require('templates/header.php'); ?>
			
<?php
	
	require("database/config.php");

	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$path = $_GET["path"];
	$query = "SELECT * FROM pages WHERE slug = '" . $path . "' limit 1";
	$result = mysql_query($query);
	if (mysql_num_rows($result) > 0) {
		$row = mysql_fetch_array($result);
		$modules = mysql_query("SELECT * FROM modules WHERE page_id = " . $row['id']);
?>
	
	<div id="contentBox">
		<h2>
			<?php echo $row["name"]; ?>
			<?php if ($logged_in_user) { ?>
				(<a href="/edit.php?type=page&amp;id=<?php echo $row['id']; ?>">edit</a> | <a href="/addmodule.php?pid=<?php echo $row['id']; ?>">add sidebar item</a>)
			<?php } ?>
		</h2>
		<div class="inner">
			<?php echo $row["body"]; ?>
		</div>
	</div>
	
	<?php while($module = mysql_fetch_assoc($modules)) { ?>
		<div class="module">
			<h2>
				<?php echo $module['name']; ?>
				<?php if ($logged_in_user) { ?>
				(<a href="/edit.php?type=module&amp;id=<?php echo $module['id']; ?>">edit</a>)
			<?php } ?>
			</h2>
			<div class="inner">
				<?php echo $module['body']; ?>
			</div>
		</div>
	<?php } ?>
	
<?php
	
	
	}else{	
?>
	
	<div id="contentBox">
		<h2>404 No Page Found</h2>
		<div class="inner">
			<p>No page exists on the EFCONG website with that url.</p>
		</div>
	</div>
<?php
	}
	
?>
	
<?php require('templates/footer.php'); ?>