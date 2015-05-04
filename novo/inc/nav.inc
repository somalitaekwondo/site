<nav class="nav-collapse collapse">
    <ul class="nav">
        <li class="active"><a href="home">Home</a></li>
        <li><a href="news">News</a></li>
        <!-- <li><a href="athlete">Athlete</a></li> -->
        <li><a href="photo">Photo</a></li>
        <!-- <li><a href="gifts">Gifts</a></li> -->
        <li><a href="events">Events</a></li>
        <li><a href="about-us">About us</a></li>
        <!-- <li><a href="sponsor">Sponsor</a></li> -->
        <li><a href="contact">Contact</a></li>

        <li class="dropdown">
            <?php 
	    if((!$_SESSION['LOGGED']) or ($_SESSION['LOGGED']=="")){
	    ?>
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in/Sign in <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#login" role="button"  data-toggle="modal">Log in</a></li>
                <li><a href="register.php">Sign in</a></li>
            </ul>
	    <?php }; ?>
	    
	    <?php 
	    if($_SESSION['LOGGED']=="NO"){
	    ?>
	    
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log in/Sign in <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#login" role="button"  data-toggle="modal">Log in</a></li>
                <li><a href="register">Sign in</a></li>
            </ul>
	    
	    <?php 
	    
	    }; ?>
	    
	     <?php 
	    if($_SESSION['LOGGED']=="YES"){
	    echo "<a href=idprocessing.php?disconnect=disconnect>(".$_SESSION['NAMELOG'].": Logout...)</a>";
	    }
	    ?>
	
	</li>
    </ul>
</nav><!--/.nav-collapse -->
