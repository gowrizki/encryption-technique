<?php 
$string 	= "Hacktoberfest 2020";
$encryption = base64_encode($string);
$decryption = base64_decode($encryption);
?>