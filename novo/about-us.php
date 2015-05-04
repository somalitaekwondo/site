<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - About us</title>
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
        <section id="container" class="container aboutus">
        <br />    
        <br />    
        <br />    
            <div class="page-header">
                <h1>About us</h1>
            </div>
            <div class="row-fluid media">
                <div class="span7">
                    <p>Having its headquarters in Switzerland, Somali Taekwondo was established in 2012 and is responsible for all aspects of Somali National Team around the world helping athletes achieve their full potential, and preparing them for major competition, as well as selecting athlete to compete at African Championship, World Championships, and of course the Olympic Games.</p>
 
                    <p>After emerging from decades of civil war and social upheaval, Somali Taekwondo use the sport to promote a better image of Somali and helping the country climb out of poverty.</p>
                    <p>Somali Taekwondo use funds provided from donations of people from all around the world to promote Somali image, giving an  assistance to the sport, focusing on improving opportunities for the somalian athletes participate in many tournament, giving a hope for the country.</p>
                     
                    <p>Every donation will be indented  for the developing of each somalian athlete giving the oportunity to participate to every tournement recognized by the World Taekwondo Federation and the Somali Olympic Committee. Donations that will be more than needed will be given to an ONG that helps against the somali poverty.</p>

                </div>

                <div class="span5 thumbnail">
                    <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash3/942859_162735743901850_517590466_n.jpg" alt="" />

                </div>
            </div>  

            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
