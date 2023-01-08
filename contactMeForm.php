<?php

	if (isset($_Post['submit']))
	{
	$mailFrom = $_Post['mail'];
	$phone-number = $_Post['phone-number'];
	$homepageadd = $_Post['homepageadd'];
	
	$feedback = $_Post['feedback'];
	
	$mailTo = "bajrachr@sheridancollege.ca";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from with phone number".$phone-number.".\n\".$feedback;
	
	mail($mailTo, $homepageadd, $txt, $headers);
	header("Location: index.php"?mailsend");
	}