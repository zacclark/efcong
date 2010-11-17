<?php require('templates/header.php'); ?>
			
<?php
	if($logged_in_user){
	require("database/config.php");
	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$pid = $_GET['pid'];

	if (!$_POST) {
	
?>

	<div id="contentBox"> 
		<h2>Adding Module</h2> 
		<div class="inner"> 
			<form action="" method="post">
				<div class="row">
					<label for="name">Name:</label>
					<input name="name" value="" />
				</div>
				<div class="row">
					<label for="body">Body:</label>
					<textarea name="body"></textarea>
				</div>
				<input type="submit" value="save" />
			</form>
		</div>
	</div>
	
<?php }else{ 
	
	function addModule($name, $body, $pid) 
	{	 
		$query = "INSERT INTO modules VALUES (null, \"" . $name . "\", \"" . $body . "\", " . $pid . ", 1)"; 
		#echo $query;
		$ret = mysql_query($query); 
		if(!$ret){echo "failed";}
		#if ($ret){echo "yeah!";}else{echo mysql_error();};
	}
	
	$modname = $_POST['name'];
	$modbody = $_POST['body'];
	
	addModule($modname, $modbody, $pid);
	
?>
<div id="contentBox"> 
		<h2>Saved Module</h2> 
	</div>
<?php } ?>

<?php } // login? ?>