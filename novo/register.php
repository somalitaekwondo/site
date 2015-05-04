<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Registration</title>
        <?php include('inc/metatags.inc') ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    
        <header>
            <div class="navbar-wrapper">
                  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
              <div class="container">
                <div class="navbar navbar-inverse">
                     <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <a class="brand" href="/home"><img src="img/logo.png" alt="gotkd"  width="150" /></a>
                              <?php include('inc/nav.inc') ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="container" class="container">
            <form class="registration" method="post" action="idprocessing.php">
                <br />
                <br />
                <input type="hidden" name="TOPROCESS" value="reg">
                <fieldset>
                    <legend>Registration Page</legend>
                    <dl class="register span3">
                        <dt>
                            <label for="name">Name:</label>
                            <input type="text" id="name" required  name="NAME" tabindex=11 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="ADDRESS" required tabindex=13 placeholder=""> 
                        </dt>
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="EMAIL" required tabindex=15 placeholder=""> 
                        <dt>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="PASSWORD" required tabindex=17 placeholder=""> 
                        </dt>

                        <dt>
                            <label for="city">City:</label>
                            <input type="text" id="city" name="CITY" required tabindex=19 placeholder="">
                        </dt>
                        <dt>
                            <label for="state">State:</label>
                            <input type="text" id="state" name="STATE" required tabindex=21 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="birthday">Birthday:</label> 
                            <input type="date" id="birthday" name="BIRTHDAY" required tabindex=23 placeholder=""> 
                        </dt>

                    </dl>
                    <dl class="register span2">
                        <dt>
                            <label for="surname">Surname:</label>
                            <input type="text" id="surname" name="SURNAME" required tabindex=12 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="numbern">House N:</label> 
                            <input type="text" id="numbern" name="NUMBER" required tabindex=14 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="confemail">Confirm Email:</label>
                            <input type="text" id="confemail" name="CONFIRM_EMAIL" required tabindex=16  placeholder="">
                        </dt>
                        <dt>
                            <label for="confpass">Confirm Password:</label>
                            <input type="password" id="confpass" name="CONFIRM_PASSWORD" required tabindex=18 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="zipcodepostal">Zipcode/Postal:</label>
                            <input type="text" id="zipcodepostal" name="ZIPCODE" required tabindex=20 placeholder=""> 
                        </dt>
                        <dt>
                            <label for="country">Country:</label>
                            <input type="text" id="country" name="COUNTRY" required tabindex=22 placeholder="">
                        </dt>
                    </dl>
                    <br class="all" />
                    <dl class="span6">
                        <dt>
                            <label class="checkbox"> 
                                <input type="checkbox" required tabindex=24 />
                                <p>I do accept to register myself with the Somali Taekwondo National Team as a supporter and I won't use the Somali Taekwondo National Team image or name to my own commercial purpose. I also do accept the rules of copyright.</p>
                            </label>
                        </dt>
                        <dt class="form-actions">
                           <button type="submit" tabindex=25 class="btn btn-primary">Save</button>
                        </dt>

                    </dl> 
                </fieldset>
            </form>
            <br />
            <br />
            <section class="span4 page-header">
                <h3>Login</h3>
            </section>
            <section class="span4">
               <h4>Are you already registerd?</h4>
               <a href="login" title="Login"><button type="button" tabindex=26 class="btn pull-right btn-primary">Login!</button></a>
            </section>

            <br class="all" />

            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
