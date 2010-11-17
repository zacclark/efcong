<?php require('templates/header.php'); ?>
			
<?php
	if($logged_in_user){
	require("database/config.php");
	mysql_connect($host, $user, $password); 
	mysql_select_db($database) or die("Critical Error: Unable to find the right database"); 	
	$id = $_GET['id'];
	$type = $_GET['type'];
	//$action = $_GET['action'];
	
	if($type == "page"){
		$table = "pages";
	}else if($type == "module") {
		$table = "modules";
	}else{
		die("incorrect type");
	}

	if (!$_POST) {
	
	$item = mysql_fetch_assoc( mysql_query( "SELECT * FROM " . $table . " WHERE id = " . $id . " LIMIT 1" ) );
?>

	<div id="contentBox"> 
		<h2>Editing Item</h2> 
		<div class="inner"> 
			<form action="" method="post">
				<div class="row">
					<label for="name">Name:</label>
					<input name="name" value="<?php echo $item['name']; ?>" />
				</div>
				<div class="row">
					<label for="body">Body:</label>
					<textarea name="body"><?php echo $item['body']; ?></textarea>
				</div>
				<input type="submit" value="save" />
			</form>
		</div>
	</div>
	
<?php }else{ 
	
	$name = $_POST['name'];
	$body = $_POST['body'];
	
	$query = "UPDATE " . $table . " SET name = '" . $name . "', body = '" . $body . "' WHERE id = " . $id;
	$run = mysql_query($query);
	
?>
<div id="contentBox"> 
		<h2>Saved Item</h2> 
	</div>
<?php } ?>

<?php } // login? ?>