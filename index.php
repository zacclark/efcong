<?php require('templates/header.php'); ?>
			
	<?php
	$path = $_GET["path"];
	?>

	<?php if ($path == ""|| $path == "home") { ?>
			
			<div id="contentBox">
				<h2>About the CNGEF</h2>
				<div class="inner">
					<p><?php echo $_GET["path"]; ?></p>
					<p>The Education Foundation, Colorado National Guard was founded in 2004 near the beginning of the war in Iraq after 9/11.	The Colorado National Guard (both Air and Army) deployed hundreds of personnel into combat during the first months of Operation Iraqi Freedom, and were instrumental in the success of the operation. To date literally thousands of our Colorado National Guard service members have deployed (many multiple times). These citizen-soldiers step up to the call of our nation, and our communities in times of war and in times of natural disaster. They quietly and resolutely go about their duty asking little in return.</p>
					<p>The Education Foundation feels we can help these American heroes, by helping their families. Grants awarded by the Education Founda- tion are for Colorado National Guard members, and their immediate families only. These grants help our State’s citizen-soldiers by help- ing with the cost of higher education for their dependents, often while they are deployed for extended periods in very dangerous, remote locations. The dependents of 6,000 Colorado Air and Army National Guard families called to serve in the War-on-Terror, had little or no State or Federal education benefits available to them. The Foundation’s Mission is to provide counseling and tuition grants enabling dependents to begin or continue their college or technical school education. To date the Foundation has provided over $200,000 to 202 dependents.</p>
        		</div>
			</div>
	<?php }else if ($path == "news") { ?>
			<div id="contentBox">
				<h2>News Page (coming soon)</h2>	
				<div class="inner">		
				</div>
			</div>
	<?php }else if ($path == "scholarship") { ?>
		<div id="contentBox">
			<h2>Scholarship Page (coming soon) </h2>
			<div class="inner">
			</div>
		</div>
	<?php }else if ($path == "history") { ?>
		<div id="contentBox">
			<h2>History Page (coming soon) </h2>
			<div class="inner">
			</div>
		</div>
	<?php }else if ($path == "donate") { ?>
		<div id="contentBox">
			<h2>Donation Page (coming soon) </h2>
			<div class="inner">
			</div>
		</div>
	<?php }else if ($path == "contact") { ?>
		<div id="contentBox">
			<h2>Contact Page (coming soon) </h2>
			<div class="inner">
			</div>
		</div>
	<?php }else{ ?>
		404 <?php echo $_GET["path"]; ?>
	<?php } ?>
	
<?php require('templates/footer.php'); ?>