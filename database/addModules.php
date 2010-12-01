<?php

// require("config.php");
// 
// mysql_connect($host, $user, $password); 
// mysql_select_db($database) or die("Critical Error: Unable to
// find the right database"); 
// 
// mysql_query("DROP TABLE modules");
// $query = "CREATE TABLE modules (id int(6) NOT NULL auto_increment, name VARCHAR(255) NOT NULL, body TEXT, page_id int NOT NULL, page_order int, UNIQUE id (id))"; 
// mysql_query($query);
// 
// function addModule($name, $body, $pid) 
// { 
// 	$query = "INSERT INTO modules VALUES (null, \"" . $name . "\", \"" . $body . "\", " . $pid . ", 1)"; 
// 	#echo $query;
// 	$ret = mysql_query($query); 
// 	if($ret){echo "success";}
// 	#if ($ret){echo "yeah!";}else{echo mysql_error();};
// }
// 
// //addPage('Contact Information', 'contact', 'Contact Us page, coming soon'); 
// $ask = "SELECT id FROM pages WHERE slug = 'contact'";
// $ret = mysql_query($ask);
// $data = mysql_fetch_assoc($ret);
// $id = $data['id'];
// print_r($id);
// 
// addModule("test", "<p>testing</p>", $id);
// 
// mysql_close();

?>