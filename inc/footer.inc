<footer>
  <hr />
  <section class="row">
      <article class="span12">
          <h4>Supporters</h4>
         
          <ul class="sponsors">
              <!-- <li><a class="thumbnail span2" href="http://www.gotkd.com.br" rel="external" title="Gotkd"><img src="img/sponsor/logo_gotkd.png" alt="gotkd" /></a></li> -->
              <li><a class="thumbnail span2" href="http://www.wtf.org/wtf_eng/main/main_eng.html" rel="external" title="WTF World Taekwondo Federation"><img src="img/sponsor/wtf.png" alt="WTF World Taekwondo Federation" /></a></li>
              <li><a class="thumbnail span2" href="http://www.taekwondo-malley.ch" rel="external" title="Taekwondoo Malley"><img src="img/sponsor/malley.png" alt="Taekwondoo Malley" /></a></li>
              <li><a class="thumbnail span2" href="http://www.nocsom.com/en/" rel="external" title="Somali National Olympic Committee"><img src="img/sponsor/somali_national_olympic_committee.png" alt="sponsor" /></a></li>
             <!--  <li><a class="thumbnail span2" href="http://www.kwon.com" rel="external" title="kwon"><img src="img/sponsor/kwon.jpg" alt="sponsor kwon" /></a></li>
              <li><a class="thumbnail span2" href="http://www.hortel.net" rel="external" title="hortel"><img src="http://www.hortel.net/images/hortel.jpg" alt="sponsor hortel" /></a></li> -->
          </ul>
      </article>
  </section>
  
  <hr />

  <p><img src="img/logo_footer.jpg" width="100" alt="Somali Taekowndo" />&copy; Somali Taekwondo 2013</p>


 <nav class="navFooter pull-right">
    <ul>
        <li><a href="home">Home</a></li>
        <li><a href="news">News</a></li>
        <!-- <li><a href="athlete">Athlete</a></li> -->
        <li><a href="photo">Photo</a></li>
        <!-- <li><a href="gifts">Gifts</a></li> -->
        <!-- <li><a href="events">Events</a></li> -->
        <li><a href="about-us">About us</a></li>
        <li><a href="support">Support</a></li>
        <li><a href="http://www.somalitaekwondo.com/Summer-Literacy-At-Providence-Glen" title="indiegogo">Indiegogo</a></li>

        <li><a href="contact">Contact</a></li>    

    </ul>
</nav><!--/.nav-collapse -->


</footer>
<!-- Login -->
<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login</h3>
  </div>
  <div class="modal-body">
    <form type="hidden" name="TOPROCESS" value="log" class="registration" method="post" action="idprocessing.php">
        <fieldset>
            <legend>Account</legend>
            <dl class="register span3">
                <dt>
                    <label>Email:</label>
                    <input type="email"  name="EMAIL" required placeholder="ex@somalitaekwondo.com"> 
                </dt>
                <dt>
                    <label>Password:</label>
                    <input type="password" name="PASSWORD" required placeholder="********">
                    <input type="hidden" name="TOPROCESS" value="log">                  
                </dt>

            </dl>
                    
            <dl class="row">
                <dt>
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
<br />Or <br />
<!-- login fb -->
<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '382072668568947', // App ID
      channelUrl : 'https://tranquil-ocean-2751.herokuapp.com/', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
 // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any auth related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct user interaction (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };
// Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
</script>
<!--Below we include the Login Button social plugin. This button uses the JavaScript SDK to-->
<!--present a graphical Login button that triggers the FB.login() function when clicked.-->
<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
</script>

 <script src="//connect.facebook.net/en_US/all.js"></script>
			
        </fieldset>
    </form>
	
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

