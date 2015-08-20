<?php
/* captcha-validate file */

session_start();

if(strtolower($_POST['answer']) == $_SESSION['captcha'])
	echo 'Captcha solved sucesfully, now you can allow this user to submit comment/vote/upload/etc.';
else
	echo 'Sorry, captcha not solved. Offer user captcha again or what ever.';
	
unset($_SESSION['captcha']);	
?>