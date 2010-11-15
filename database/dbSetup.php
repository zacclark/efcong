<?php require("config.php");

mysql_connect($host, $user, $password); 
mysql_select_db($database) or die("Critical Error: Unable to
find the right database"); 
mysql_query("DROP TABLE pages");

$query = "CREATE TABLE pages (id int(6) NOT NULL auto_increment, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, body text, UNIQUE id (id))"; 
mysql_query($query);

function addPage($name, $slug, $body) 
{ 
	$query = "INSERT INTO pages VALUES (null, \"" . $name . "\", \"" . $slug . "\", \"" . $body . "\")"; 
	#echo $query;
	$ret = mysql_query($query); 
	#if ($ret){echo "yeah!";}else{echo mysql_error();};
}

addPage('About Us', 'home', '<p>The Education Foundation, Colorado National Guard was founded in 2004 near the beginning of the war in Iraq after 9/11.	The Colorado National Guard (both Air and Army) deployed hundreds of personnel into combat during the first months of Operation Iraqi Freedom, and were instrumental in the success of the operation. To date literally thousands of our Colorado National Guard service members have deployed (many multiple times). These citizen-soldiers step up to the call of our nation, and our communities in times of war and in times of natural disaster. They quietly and resolutely go about their duty asking little in return.</p><p>The Education Foundation feels we can help these American heroes, by helping their families. Grants awarded by the Education Founda- tion are for Colorado National Guard members, and their immediate families only. These grants help our State’s citizen-soldiers by help- ing with the cost of higher education for their dependents, often while they are deployed for extended periods in very dangerous, remote locations. The dependents of 6,000 Colorado Air and Army National Guard families called to serve in the War-on-Terror, had little or no State or Federal education benefits available to them. The Foundation’s Mission is to provide counseling and tuition grants enabling dependents to begin or continue their college or technical school education. To date the Foundation has provided over $200,000 to 202 dependents.</p>');
#$query1 = "INSERT INTO pages VALUES (null, 'Home Page', 'home', 'Homepagelolololololol')";
#mysql_query($query1);

addPage('News', 'news', 'News Page, coming soon'); 

addPage('Scholarships', 'scholarship', 'Scholarship Page is coming soon'); 

addPage('History', 'history', 'History Page, coming soon'); 

addPage('Donations', 'donate', 'Donation Page, coming soon'); 

addPage('Contact Information', 'contact', 'Contact Us page, coming soon'); 

mysql_close();

?>