<?php session_start(); ?>
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
        <br />    
        <br />    
        <br />    
            <div class="page-header">
                <h1>Contact</h1>
            </div>
            <div class="row-fluid media">
                <div class="span5">
                    <form class="form-horizontal" action="idprocessing.php" method="post">
                        <dl class="control-group">
                            <dt><label class="control-label" for="name">Name</label></dt>
							<input type="hidden" name="TOPROCESS" value="sendmailcontact">
                            <dd class="controls"><input type="text" id="name" placeholder="Name" name="name" required /></dd>
                        </dl>
                        <dl class="control-group">
                            <dt><label class="control-label" for="email">Email</label></dt>
                            <dd class="controls"><input type="text" id="email" placeholder="Email" required name="email"></dd>
                        </dl>
                        <dl class="control-group">
                            <dt><label class="control-label" for="subject">Subject</label></dt>
                            <dd class="controls"><input type="text" id="subject" placeholder="Subject" required name="subject"></dd>
                        </dl>
                        <dl class="control-group">
                            <dt><label class="control-label" for="message">Message</label></dt>
                            <dd class="controls"><textarea type="text" rows="6" id="message" placeholder="Message" required name="message"></textarea></dd>
                        </dl>
                        <dl class="form-actions" style="width:222px">
                            <dt>&nbsp;</dt>
                            <dd><button type="submit" class="btn pull-right btn-primary">Send</button></dd>
                        </dl>
						<dl>
						<?php if($_GET['sent'] == "sent"){ echo "<font color=green>Email Sent</font>"; }; ?>
						</dl>
                    </form>
                </div>

                <div class="span7">
                    <h3>Address</h3>
                    <p>Av. de Morges 44</p>
                    <p>1004 Lausanne</p>
                    <p>Vaud</p>
                    <p>Switzerland.</p>
                    <p>Tel : +41 79 3467869</p>
                    <hr />
                    <p><strong>General informations:</strong> <a href="mailto:contact@somalitaekwondo.com" title="contact@somalitaekwondo.com">contact@somalitaekwondo.com</a></p>
                    <!-- <p><strong>Marketing:</strong> <a href="mailto:media@somalitaekwondo.com" title="media@somalitaekwondo.com">media@somalitaekwondo.com</a></p> -->
                    <!-- <p><strong>Coach:</strong> <a href="mailto:coach@somalitaekwondo.com" title="coach@somalitaekwondo.com">coach@somalitaekwondo.com</a></p> -->


                </div>
            </div>  

            <?php include('inc/footer.inc') ?>
            
        </section> <!-- /container -->

        <?php include('inc/js.inc') ?>
       
    </body>
</html>
