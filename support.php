<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Athlete</title>
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
        <section class="row ajusts">
            <div class="span12 page-header">
              <h1>Support</h1>
            </div>
            <article class="span12 sponsors">
                <ul class="thumbnails">
                  <li><a class="thumbnail span2" href="http://www.gotkd.com.br" rel="external" title="Gotkd"><img src="img/sponsor/logo_gotkd.png" alt="gotkd" /></a></li>
                  <li><a class="thumbnail span2" href="http://www.wtf.org/wtf_eng/main/main_eng.html" rel="external" title="WTF World Taekwondo Federation"><img src="img/sponsor/wtf.png" alt="WTF World Taekwondo Federation" /></a></li>
                  <li><a class="thumbnail span2" href="http://www.taekwondo-malley.ch" rel="external" title="Taekwondoo Malley"><img src="img/sponsor/malley.png" alt="Taekwondoo Malley" /></a></li>
                  <li><a class="thumbnail span2" href="http://www.nocsom.com/en/" rel="external" title="Somali National Olympic Committee"><img src="img/sponsor/somali_national_olympic_committee.png" alt="sponsor" /></a></li>
                  <li><a class="thumbnail span2" href="http://www.kwon.com" rel="external" title="kwon"><img src="img/sponsor/kwon.jpg" alt="sponsor kwon" /></a></li>
                </ul>
            </article>
           

        </section>
            <?php include('inc/social.inc') ?>
            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->
        <?php include('inc/js.inc') ?>
       
    </body>
</html>
