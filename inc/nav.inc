<nav class="nav-collapse collapse">
    <ul class="nav">
        <li class="active"><a href="home" title="Home">Home</a></li>
        <li><a href="news" title="News">News</a></li>
        <!-- <li><a href="athlete">Athlete</a></li> -->
        <li><a href="photo" title="Photo">Photos</a></li>
        <!-- <li><a href="gifts">Gifts</a></li> -->
        <!-- <li><a href="events" title="Events">Events</a></li> -->
        <li><a href="about-us" title="About us">About us</a></li>
        <li><a href="supporting">Supporting</a></li>
        <li><a href="http://www.somalitaekwondo.com/Summer-Literacy-At-Providence-Glen" title="indiegogo">Indiegogo</a></li>

        <li><a href="contact" title="Contact">Contact</a></li>

        <!-- <li class="dropdown">
            <?php 
	    if((!$_SESSION['LOGGED']) or ($_SESSION['LOGGED']=="")){
	    ?>
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in/Sign up <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#login" role="button"  data-toggle="modal">Log in</a></li>
                <li><a href="register.php">Sign up</a></li>
            </ul>
	    <?php }; ?>
	    
	    <?php 
	    if($_SESSION['LOGGED']=="NO"){
	    ?>
	    
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in/Sign up <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#login" role="button"  data-toggle="modal">Log in</a></li>
                <li><a href="register">Sign up</a></li>
            </ul>
	    
	    <?php 
	    
	    }; ?>
	    
	     <?php 
	    if($_SESSION['LOGGED']=="YES"){
	    echo "<a href=idprocessing.php?disconnect=disconnect>(".$_SESSION['NAMELOG'].": Logout...)</a>";
	    }
	    ?>
		
		</li> -->
    </ul>

    <ul class="navSocials">
    	<li><a class="gplus" data-toggle="tooltip" title="Google Plus Somali Taekwondo" href="https://plus.google.com/u/0/b/105164102392878483908/105164102392878483908/posts" rel="external" >Google Plus Somali Taekwondo</a></li>
    	<li><a class="twitter" href="https://twitter.com/somalitaekwondo" rel="external" data-toggle="tooltip" title="@somalitaekwondo">Twitter Somali Taekwondo</a></li>
    	<li><a class="fb" href="https://www.facebook.com/Somali.Taekwondo.Official" rel="external" data-toggle="tooltip" title="Facebook Somali Taekwondo">Facebook Somali Taekwondo</a></li>
    	<li><a class="rss" href="http://www.somalitaekwondo.com/feed/rss.xml" rel="external" data-toggle="tooltip" title="RSS Somali Taekwondo">RSS - somalitaekwondo</a></li>
    </ul>
</nav><!--/.nav-collapse -->
   
<script type="text/javascript">$('#element').tooltip('show')</script>