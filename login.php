<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
if ($user && $pass) {
?>
	
	<?php if ($user == "efcong" && $pass == "emptyfolder56") { ?>
		<?php
		session_start();
		$_SESSION['logged_in'] = true;
		header( 'Location: /' ) ;
		?>
	<?php } else { ?>
		Attempted to sign in as <?php echo $user; ?>. Incorrect user or password.
	<?php } ?>

<?php } else { ?>

	<form action="/login.php" method="post">
		<input name="user" placeholder="user" type="text">
		<input name="pass" placeholder="pass" type="password">
		<input type="submit">
	</form>

<?php } ?>	