<?php session_start(); 
require 'somalitkdapp.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo</title>
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
                    <a href="events"><img src="img/somali2.jpg"  alt="events donation somali"></a>
              
               <!--  <div class="carousel-caption">
                  <h1>Example headline.</h1>
                  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                </div> -->
              
            </div>
        </div>
    </section><!-- /.carousel -->  
        <section class="row ajusts">
            <div class="span12 page-header">
              <h1>Somali Taekwondo National Team <small>News</small></h1>
            </div>
            <article class="span8">
               <!-- <ul class="thumbnails">
                  <li class="span8">
                    <div class="thumbnail">
                      <img src="http://i.istockimg.com/file_thumbview_approve/8904414/2/stock-photo-8904414-somalia-flag-boy.jpg" alt="">
                      <h3>Thumbnail label</h3>
                      <p>Thumbnail caption...</p>
                    </div>
                  </li> 
                </ul> -->

               <ul class="thumbnails">
                  <li class="span4">
                    <div class="thumbnail">
                      <a href="somali-taekwondo-medals-switzerland-2013"><img width="380" height="150" src="http://nocsom.so/en/uploads/content/photo/251.jpg" alt="">
                      <h3>The success continued</h3>
                      <p>The success of Somali National Taekwondo Team continued as they won more medals. Somali Taekwondo National athletes representing the country for International Schaffhausen Open Championship in Switzerland...</p></a>
                    </div>
                  </li> 
                  <li class="span4">
                    <div class="thumbnail">
                      <a target="_blank" href="http://www.wtf.org/wtf_eng/site/events/calendar.html"><img src="http://witkdspin.files.wordpress.com/2013/01/wtf-world_taekwondo_federation_logo.jpg" alt="">
                      <h3>WTF Event Calendar</h3>
                      <p>Check out the calendar of World Taekwondo Federation...</p></a>
                    </div>
                  </li>
		  <li class="span4">
                    <div class="thumbnail">
                      <a target="_blank" href="somali-taekwondo-medals-alexandria-2013"><img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-ash3/150410_10151302541484856_1828782372_n.jpg" width="400" alt="">
                      <h3>Alexandria Open 2013</h3>
                      <p>The success of Somali National Taekwondo Team...</p></a>
                    </div>
                  </li>
                   
                </ul>
            </article>
            

            <article class="span4">
                <ul class="thumbnails">
                  <li class="span4">
                     <div class="thumbnail">
                    <div class="fb-like-box" data-href="https://www.facebook.com/Somali.Taekwondo.Official" data-width="360" data-show-faces="true" data-stream="true" data-header="false"></div>
                    </div>
                  </li>
                   
                </ul>
           </article>
           
        </section>


            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->
        <?php include('inc/js.inc') ?>
       
    </body>
</html>
