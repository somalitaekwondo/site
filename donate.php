<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Donate</title>
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
            <br /><br /><br />
            <div class="page-header">
              <h1>Donate</h1>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                  <li class="span4">
                    <div class="thumbnail">
                      <img src="http://i.telegraph.co.uk/multimedia/archive/01956/dadaab-weighing_1956687i.jpg" alt="">
                      <h3>Donte</h3>
                      <p>Donate.....</p>
                    </div>
                  </li>
                  <li class="span4">
                    <div class="thumbnail">
                      <img src="http://i.telegraph.co.uk/multimedia/archive/01956/dadaab-weighing_1956687i.jpg" alt="">
                      <h3>Donte</h3>
                      <p>Donate.....</p>
                    </div>
                  </li>
                  <li class="span4">
                    <div class="thumbnail">
                      <img src="http://i.telegraph.co.uk/multimedia/archive/01956/dadaab-weighing_1956687i.jpg" alt="">
                      <h3>Donte</h3>
                      <p>Donate.....</p>
                    </div>
                  </li>
                </ul>
            </div>
            <br class="all" />

            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
