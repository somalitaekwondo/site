<?php session_start(); 

if($_SESSION['LOG_FACEBOOK']=="YES"){
header ('Location: events');
};

if($_SESSION['LOGGED']=="YES"){
header ('Location: events');
};

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Login</title>
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
            <br />
            <br />
            <form class="registration" method="post" action="idprocessing.php">
                <fieldset>
                    <legend>Login Page</legend>
                    <dl class="register span3">
                        <dt>
                            <label>Email:</label>
                            <input type="email"  name="EMAIL" required placeholder="ex@somalitaekwondo.com"> 
                        </dt>
                        <dt>
                            <label>Password:</label>
                            <input type="password" name="PASSWORD" required placeholder="********"> 
                            <input type="hidden" name="TOPROCESS" value="log">
							<input type="hidden" name="PAGE" value="login">
							
                        </dt>

                    </dl>
                    <br class="all" />
                    <dl class="row">
                        <dt class="form-actions ">
                           <button type="submit" class="btn pull-right btn-primary">Login</button>
                        </dt>
						<dt>
				<?php
				if($_SESSION['LOGGED']=="NO"){
				echo "<font color=red>User name or password incorrect.</font>"; 
				};
				?>
				</dt>

                    </dl> 
                </fieldset>
            </form>
            <section class="span4 page-header">
                <h3>Register</h3>
            </section>
            <section class="span4">
               <h4>You do not have an account?</h4>
               <a href="register" title="Register"><button type="submit" class="btn pull-right btn-primary">Register!</button></a>
            </section>

            <br class="all" />

            <?php include('inc/footer.inc') ?>

            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
