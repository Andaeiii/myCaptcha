<?php
/* captcha.php file*/

	session_start();
	
	header("Expires: Tue, 01 Jan 2013 00:00:00 GMT"); 
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
	header("Cache-Control: no-store, no-cache, must-revalidate"); 
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+-/?<>';

    $randomString = 'Aminu Mohammed..';

    for ($i = 0; $i < 7; $i++){
        $randomString .= $chars[rand(0, strlen($chars)-1)];
    }
	
	$_SESSION['captcha'] = strtolower( $randomString );
	
	
	$im = @imagecreatefrompng("captcha_bg.png"); 
	
	$fonts = explode(';','brad;brush;airbonne;antkille;dirtdeco;larabiefont');
	
	$itx = mt_rand(0, count($fonts)-1);
	
	//echo $fonts[$itx];  
	//exit;
	
	$ds = 'fonts/' .$fonts[$itx] .'.ttf';
	
	imagettftext($im, 30, 0, 10, 38, imagecolorallocate ($im, 0, 0, 0), $ds , $randomString);
	
	header ('Content-type: image/png');
	imagepng($im, NULL, 0);
	imagedestroy($im);/**/


	//the part where the captha renders... where you utilize it.. 
	
	/*
		ob_start();
		imagepng($im);
		$imagestring = ob_get_contents();
		ob_end_clean();
	
	*/
	
	//echo base64_decode($);

?>