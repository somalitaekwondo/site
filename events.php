<?php
session_start();
require("connect.php");

$query=mysql_query("SELECT * FROM EVENT WHERE ID_EVENT LIKE '1' ");

$array=mysql_fetch_array($query);
$percentage = (($array['EVENT_BUDGET_DONATED'] / $array['EVENT_BUDGET_NEEDED']) * 100);
$_SESSION['DONATED'] = $array['EVENT_BUDGET_DONATED'];

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Events</title>
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
      <!-- Carousel ================================================== -->
        <section id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/somali3.jpg"  alt="">              
                </div>
        </div>
    </section><!-- /.carousel -->  

        <div class="page-header">
          <h1>Events</h1>
        </div>          

        <div class="row-fluid">
<div class="page-header">
                    <h3>$2.000 will be needed to make it happen.</h3>
                </div>
                <div class="span8 tabbable tabs-right"> <!-- Only required for left/right tabs -->
                    
                  <ul class="nav nav-tabs">
                    <li><a href="#tab3" data-toggle="tab"><span class="small">$</span>5</a></li>
                    <li><a href="#tab2" data-toggle="tab"><span class="small">$</span>10</a></li>
                    <li class="active"><a href="#tab1" data-toggle="tab"><span class="small">$</span>25</a></li>
                    <li><a href="#tab4" data-toggle="tab"><span class="small">$</span>100</a></li>
                    <li><a href="#tab5" data-toggle="tab"><span class="small">$</span>500</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        
            <?php if($_SESSION['LOGGED']=="YES"){ ?>
                    <article class="donatejustify">
                    <h3><span class="small">$</span>25.00</h3>
                <form action="hidden_paypal_redirection_25" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="GWGEH4LS6SGWQ">
                <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                </form>
                    </article>
             <?php };?>
        </div>
        <div class="tab-pane" id="tab2">
                      
          <?php if($_SESSION['LOGGED']=="YES"){ ?>
            <article class="donatejustify">
                <h3><span class="small">$</span>10.00</h3>
            <form action="hidden_paypal_redirection_10" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="HV4GMZ4PLX93U">
                <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
            </form>
        </article>
                <?php };?>
                        </div>
                        <div class="tab-pane" id="tab3">
                          
              <?php if($_SESSION['LOGGED']=="YES"){ ?>
                    <article class="donatejustify">
                       <h3><span class="small">$</span>5.00</h3>
                        <form action="hidden_paypal_redirection_5" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="44UAG4ZE4HY58">
                            <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                        </form>                    
                    </article>
                <?php };?>
                        </div>
                        <div class="tab-pane" id="tab4">
                            
                <?php if($_SESSION['LOGGED']=="YES"){ ?>
                       <article class="donatejustify">
                        <h3><span class="small">$</span>100.00</h3>
                            <form action="hidden_paypal_redirection_100" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="5RBV26HK7WE9N">
                                <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </article>
            <?php };?>              
                         </div>
                <div class="tab-pane" id="tab5">
                <?php if($_SESSION['LOGGED']=="YES"){ ?>
                    <article class="donatejustify">
                        <h3><span class="small">$</span>500.00</h3>
                        <form action="hidden_paypal_redirection_500" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="NWKU297X73VVC">
                            <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </article>
                <?php };?>
            </div>
            <?php if($_SESSION['LOGGED']!="YES"){ ?>
            <h3 class="s1">To donate you need to Login or Register</h3>
            <section class="pull-left">
                <form class="registration" method="post" action="idprocessing.php">
                <fieldset>
                    <legend><h4>Login Page</h4></legend>
                    <dl class="register span3">
                        <dt>
                            <label>Email:</label>
                            <input type="email"  name="EMAIL" required placeholder="ex@somalitaekwondo.com"> 
                        </dt>
                        <dt>
                            <label>Password:</label>
                            <input type="password" name="PASSWORD" required placeholder="********"> 
                            <input type="hidden" name="TOPROCESS" value="log">
                            <input type="hidden" name="PAGE" value="event">
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
		if($_GET['logregister']) echo "You have been register successfully.";
                ?>
                </dt>

                    </dl> 
                </fieldset>
                </form>
                <section style="margin-top:40px;" class="span5 pull-right">
                    <legend><h4>Register</h4></legend>
                </section>
                <section class="span5 pull-right">
                   <h4>You do not have an account?</h4>
                   <a href="register" class="btn pull-right btn-primary" title="Register">Register!</a>
                </section>
            </section>
            <?php }; ?>
                      </div>

                    </div>
                <div style="padding: 5px" class="progress span3 progress-striped active">
                    <?php echo $percentage; ?>%<div class="bar" style="width: <?php echo $percentage; ?>%;"></div>          
                    </div> 
                <h4><span class="small">$</span><?php echo $array['EVENT_BUDGET_DONATED']; ?>,00</h4>

            <!--     -->
            <ul class="thumbnails">
              <li class="span12">
                <div>
                    <a style="float:left; padding:10px" href="http://tpss.nl/PDF/467.pdf"><img src="img/austrian.jpg" width="175" alt=""></a>
                    <h3>Donate</h3>
                    <p>Austria 01/06/2013, 1200 high level athletes from around the world will compete, for the first time there will be two somalian athletes to represent their nation.</p>

                    <p>Somali has never been shown to the world as a sporting country like it will be now.</p>

                    <p>Thanks to all of you for making it real and for supporting and helping Somali to show a face of happiness, a smile and hope through taekwondo.</p>

                    <p>2.000 $ will be needed to make it happen.</p>

                    <p>Donations will be necessary to let <strong>Faisal J. Aywes</strong> and <strong>Mohamed Deq Abdule</strong> look for a medal and bring Somali's flag to a higher place.</p>

                    <p class="blue">Every donation that exceeds the necessary budget will be given to an ONG that helps Somali Climb out of poverty. </p> 
                    
                </div>
              </li>               
             </ul>
                
		 
            </div>
            <br class="all" />

            <?php include('inc/social.inc') ?>
            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
