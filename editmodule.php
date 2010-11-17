<?php require('templates/header.php'); ?>
			
<?php
	if($logged_in_user){
	require("database/config.php");
	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$modid = $_GET['id'];

	if (!$_POST) {
	
	$module = mysql_fetch_assoc( mysql_query( "SELECT * FROM modules WHERE id = " . $modid . " LIMIT 1" ) );
?>

	<div id="contentBox"> 
		<h2>Editing Module</h2> 
		<div class="inner"> 
			<form action="" method="post">
				<div class="row">
					<label for="name">Name:</label>
					<input name="name" value="<?php echo $module['name']; ?>" />
				</div>
				<div class="row">
					<label for="body">Body:</label>
					<textarea name="body"><?php echo $module['body']; ?></textarea>
				</div>
				<input type="submit" value="save" />
			</form>
		</div>
	</div>
	
<?php }else{ 
	
	$modname = $_POST['name'];
	$modbody = $_POST['body'];
	
	$query = "UPDATE modules SET name = '" . $modname . "', body = '" . $modbody . "' WHERE id = " . $modid;
	$run = mysql_query($query);
	
?>
<div id="contentBox"> 
		<h2>Saved Module</h2> 
	</div>
<?php } ?>

<?php } // login? ?>