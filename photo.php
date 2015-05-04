<?php //session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Somali Taekwondo - Photos</title>
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
            <br />
            <br />
            
            <div class="page-header">
               <h3>Somali Gallery</h3>
            </div>
            <ul class="fancyphoto">
                <li><a class="fancybox" href="img/photo/Elton_e_faisal.png" data-fancybox-group="gallery" title="Elton and Faisal"><img src="img/photo/min_Elton_e_faisal.jpg"  class="img-rounded" alt="Elton and Faisal" /></a></li>
                <li><a class="fancybox" href="img/photo/Elton_Faisal.png" data-fancybox-group="gallery" title="Elton and Faisal"><img src="img/photo/min_Elton_Faisal.jpg"  class="img-rounded" alt="Elton and Faisal" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_Adidas_Cup.png" data-fancybox-group="gallery" title="Faisal Adidas Cup"><img src="img/photo/min_Faisal_Adidas_Cup.jpg"  class="img-rounded" alt="Fasial Adidas Cup" /></a></li>
                <li><a class="fancybox" href="img/photo/Elton_Faisal_Fernanda_Marcio.png" data-fancybox-group="gallery" title="Elton, Faisal, Fernanda e Marcio"><img src="img/photo/min_Elton_Faisal_Fernanda_Marcio.jpg" class="img-rounded" alt="Elton, Faisal, Fernanda and Marcio" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_after_victory.png" data-fancybox-group="gallery" title="Faisal after Victory"><img src="img/photo/min_Faisal_after_victory.jpg" class="img-rounded" alt="Faisal after Victory" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_at_school.jpg" data-fancybox-group="gallery" title="Faisal at School"><img src="img/photo/min_Faisal_at_school.jpg" class="img-rounded" alt="Faisal at School" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_first_Place.png" data-fancybox-group="gallery" title="Faisal first place"><img src="img/photo/min_Faisal_first_Place.jpg" class="img-rounded" alt="Faisal first place" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_Combat.png" data-fancybox-group="gallery" title="Faisal Combat"><img src="img/photo/min_Faisal_Combat.jpg" class="img-rounded" alt="Faisal Combat" /></a></li>
                <li><a class="fancybox" href="img/photo/mohamed_when_started_the_taekwondo.jpg" data-fancybox-group="gallery" title="Mohamed Deq Abdule"><img src="img/photo/mohamed_when_started_the_taekwondo.jpg" class="img-rounded"  alt="Mohamed when started the Taekwondo" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_presentation.png" data-fancybox-group="gallery" title="Faisal Presentation"><img src="img/photo/min_Faisal_presentation.jpg" class="img-rounded" alt="Faisal presentation" /></a></li>
                <li><a class="fancybox" href="img/photo/Faisal_teching_the_taekwondo_to_the_kids.png" data-fancybox-group="gallery" title="Faisal Presentation"><img src="img/photo/min_Faisal_teching_the_taekwondo_to_the_kids.jpg" class="img-rounded" alt="Faisal teching the taekwondo to the kids" /></a></li>
                <li><a class="fancybox" href="img/photo/Marcio_Faisal_Elton.png" data-fancybox-group="gallery" title="Faisal Presentation"><img src="img/photo/min_Marcio_Faisal_Elton.jpg" class="img-rounded" alt="Marcio, Faisal and Elton" /></a></li>
                <li><a class="fancybox" href="img/photo/Marcio_Faisal.png" data-fancybox-group="gallery" title="Marcio and Faisal"><img src="img/photo/min_Marcio_Faisal.jpg" class="img-rounded" alt="Marcio and Faisal" /></a></li>

            </ul>

            <br class="all" />

            <?php include('inc/social.inc') ?>
            <?php include('inc/footer.inc') ?>

            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
     <!-- Add jQuery library -->
    <script type="text/javascript" src="fancybox/lib/jquery-1.9.0.min.js"></script>
            <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
    <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>
    <style type="text/css">
        .fancybox-custom .fancybox-skin {
            box-shadow: 0 0 50px #222;
        }
    </style>

       
    </body>
</html>
