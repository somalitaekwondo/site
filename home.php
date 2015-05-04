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
        <title>Somali Taekwondo</title>
        <?php include('inc/metatags.inc') ?>

        <style style="text/css">
            section,
            section article{
              -webkit-transition-duration: 0.8s;
                 -moz-transition-duration: 0.8s;
                  -ms-transition-duration: 0.8s;
                   -o-transition-duration: 0.8s;
                      transition-duration: 0.8s;
            }

            section {
              -webkit-transition-property: height, width;
                 -moz-transition-property: height, width;
                  -ms-transition-property: height, width;
                   -o-transition-property: height, width;
                      transition-property: height, width;
            }

            section article {
              -webkit-transition-property: -webkit-transform, opacity;
                 -moz-transition-property:    -moz-transform, opacity;
                  -ms-transition-property:     -ms-transform, opacity;
                   -o-transition-property:      -o-transform, opacity;
                      transition-property:         transform, opacity;
            }
        </style>

        <meta name="description" content=" | Somali Taekwondo National athletes representing the country for International tournament, looking forward for medals in the Olympic Games and World Championship.">
        <meta name="keywords" content=" | Somali, Taekwondo, National, athletes, representing, country, International, Tournament, medals, Olympic, Games, World, Championship">
        <link rel="alternate" type="application/rss+xml" title="Feed Somali Taekwondo  &raquo;" href="http://www.somalitaekwondo.com/feed/rss.xml" />

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
                  <!-- Carousel items -->
                  <article class="carousel-inner">
                  <div class="item active">
                    <a href="javsacript:void(0);"><img src="img/b_germany_01.jpg"  alt="Germany TKD"></a>
                  </div>
                  <div class="item">
                      <a href="#"><img src="img/somali4.jpg"  alt="Somali Taekwondo Team"></a>
                    </div>
                  <div class="item">
                      <a href="http://www.somalitaekwondo.com/Summer-Literacy-At-Providence-Glen"><img src="img/indiegogo.jpg"  alt="indiegogo"></a>
                    </div>
                  </article>
                  <!-- Carousel nav -->
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </section>

            <section class="row ajusts">
                <!-- <div class="span12 page-header">
                  <h1>Somali Taekwondo National Team <small>News</small></h1>
                </div> -->
                <article class="span8">
                    <ul class="thumbnails">

                    <li class="span4">
                        <div>
                            <a class="thumbnail" href="Somali-exile-fights-for-Olympic-dream">
                                <img src="img/photo/faisal-somali.jpg" alt="Somali exile fights for Olympic dream">
                                <h3 style="font-size: 20px">Somali exile fights for Olympic dream</h3>
                                <p>Faisal Jeylani Aweys has not seen his native Somalia since he fled 14 years ago...</p>
                            </a>
                        </div>
                    </li>

                     <li class="span4">
                        <div>
                          <a class="thumbnail" href="NOCSOM-presents-2014-Sports-and-Arts-award-to-Eng-Ahme-Kirish">
                              <img src="img/news/cayaaraha-photo-02.jpg" alt="NOCSOM presents 2014 Sports and Arts award to Eng Ahmed Kirish">
                              <h3 style="font-size: 20px">NOCSOM presents 2014 Sports and Arts award to Eng Ahmed Kirish</h3>
                              <p>With the name of "2014 sports and Arts Award", the Somali Olympic Committee's annual award...</p>
                          </a>
                        </div>
                      </li>

                      <li class="span4">
                        <div>
                          <a class="thumbnail" href="The-Somali-Taekwondo-National-Team-Participated-And-Won-Branze-Medal-In-The-African-Taekwondo-Championshios-2014-In-Tunis-Tunisia"><img src="img/African-Championship-2014/elton-and-faisal.jpg" alt="wtf">
                          <h3 style="font-size: 20px">The Somali Taekwondo Team</h3>
                          <p>The Somali Taekwondo National athlete – Faisal Aweys 58Kg category representing the country...</p></a>
                        </div>
                      </li>

                     <li class="span4">
                        <div>
                          <a class="thumbnail" href="Somali-Taekwondo-Federation-Developed-a-Program-for-Rio-2016-Summer-Olympic-Games-in-Brazil"><img src="img/news/stkd2016.jpg" alt="wtf">
                          <h3 style="font-size: 20px">Somali Taekwondo Federation</h3>
                          <p>The new Vice President and Head of International Relations of Somali Taekwondo Federation...</p></a>
                        </div>
                      </li>
                     <li class="span4">
                        <div>
                          <a class="thumbnail" href="Somali-Taekwondo-Federation-Developed-a-Program-for-Rio-2016-Summer-Olympic-Games-in-Brazil"><img src="img/news/wtc1.jpg" alt="wtf">
                          <h3 style="font-size: 20px">World Taekwondo Championship</h3>
                          <p>From the 15th until 21th of July the World Taekwondo Championship took place in...</p></a>
                        </div>
                      </li>

                     <li class="span4">
                        <div>
                          <a class="thumbnail" href="Somali-Gains-Confidence-WTF"><img src="img/president_wtf.jpg" alt="wtf">
                          <h3 style="font-size: 20px">Somalia gains confidence of WTF</h3>
                          <p>Somali Taekwondo National Team had a meeting with the president...</p></a>
                        </div>
                      </li>

                      <li class="span4">
                        <div>
                          <a class="thumbnail" href="Somali-Taekwondo-Austria-Open-2013"><img src="img/austria_home_2013.jpg" alt="Somali Taekwondo Austria Open 2013">
                          <h3>Austria Open 2013</h3>
                          <p>Innsbruck – Tirol, over 1300 fighters, the Somali National...</p></a>
                        </div>
                      </li>
                      <li class="span4">
                        <div>
                          <a class="thumbnail" href="somali-taekwondo-medals-alexandria-2013"><img src="img/news/01.jpg" width="400" alt="Somali Taekowndo - Alexandria Open 2013">
                          <h3>Alexandria Open 2013</h3>
                          <p>Emerging from decades of bloodshed and terrorism, Somalia is celebrating...</p></a>
                        </div>
                      </li>

                      <li class="span4">
                        <div>
                          <a class="thumbnail" href="somali-taekwondo-medals-switzerland-2013"><img width="380" height="150" src="img/news/02.jpg" alt="">
                          <h3>The success continued</h3>
                          <p>The success of Somali National Taekwondo Team continued as they won more medals...</p></a>
                        </div>
                      </li>
                     <li class="span4">
                        <div>
                          <a class="thumbnail" rel="external" href="http://www.wtf.org/wtf_eng/site/events/calendar.html"><img src="img/wtf.jpg" alt="wtf">
                          <h3>WTF Event Calendar</h3>
                          <p>Check out the calendar of World Taekwondo Federation...</p></a>
                        </div>
                      </li>
                    </ul>
                </article>

                <article class="span4">
                    <ul class="thumbnails">
                     <!--  <li class="span4">
                        <h4>Current donations received: <span class="black80">$<?php echo $array['EVENT_BUDGET_DONATED']; ?>,00 </span></h4>
                        <div style="padding: 5px" class="progress span3 progress-striped active">
                        <?php echo $percentage; ?>%<div class="bar text-center" style="width: <?php echo $percentage; ?>%;"></div>
                        </div>
                        <p class="text-center" style="width: 300px; margin: 0 auto;"><a href="events" title="Donate"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Donate Somali Taekwondo" /></a></p>
                      </li> -->
                       <li class="span4">
                        <h3>Faisal J. Aweys - RTS 1</h3>
                        <iframe width="370" height="315" src="http://www.youtube.com/embed/SN8RcwboyEw" frameborder="0" allowfullscreen></iframe>
                      </li>
                      <li class="span4">
                        <div class="fb-like-box" data-href="https://www.facebook.com/Somali.Taekwondo.Official" data-width="360" data-height="240" data-show-faces="true" data-stream="false" data-header="false"></div>
                      </li>
                      <li class="span4">
                        <?php if($_GET['newsletter']){ echo "Thank you.";} else{ ?>
                        <form method="post" action="idprocessing.php">

                          <dl class="span4">

                            <dt>
                                <h3 style="text-indent: -10px">Newsletter</h3>
                                <label>Name:</label>
                                <input type="text" class="span3" name="name" required placeholder="Name">
                                <input type="hidden" class="span3" name="TOPROCESS" value="addnewsletter">
                            </dt>
                            <dt>
                                <label>Email:</label>
                                <input type="email"  class="span3" name="email" required placeholder="ex@youremail.com">
                            </dt>
                            <dt>
                              <button class="btn btn-primary" type="submit">Send</button>
                            </dt>
                          </dl>

                        </form>
                       <?php }; ?>
                      </li>

                    </ul>
               </article>
               
            </section>

            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 5500
                });
            });
        </script>
    </body>
</html>
