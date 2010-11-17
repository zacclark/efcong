<?php require('templates/header.php'); ?>
			
<?php
	if($logged_in_user){
	require("database/config.php");
	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$pid = $_GET['id'];

	if (!$_POST) {
	
	$page = mysql_fetch_assoc( mysql_query( "SELECT * FROM pages WHERE id = " . $pid . " LIMIT 1" ) );
?>

	<div id="contentBox"> 
		<h2>Editing Page</h2> 
		<div class="inner"> 
			<form action="" method="post">
				<div class="row">
					<label for="name">Name:</label>
					<input name="name" value="<?php echo $page['name']; ?>" />
				</div>
				<div class="row">
					<label for="body">Body:</label>
					<textarea name="body"><?php echo $page['body']; ?></textarea>
				</div>
				<input type="submit" value="save" />
			</form>
		</div>
	</div>
	
<?php }else{ 
	
	$name = $_POST['name'];
	$body = $_POST['body'];
	
	$query = "UPDATE pages SET name = '" . $name . "', body = '" . $body . "' WHERE id = " . $pid;
	$run = mysql_query($query);
	
?>
<div id="contentBox"> 
		<h2>Saved Page</h2> 
	</div>
<?php } ?>

<?php } // login? ?>