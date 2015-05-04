<hr />
<section class="row">
    <article class="span12">
        <h4>Sponsor</h4>
        <ul class="sponsors">
            <li><a href="http://www.gotkd.com.br" rel="external" title="Gotkd"><img src="img/sponsor/logo_gotkd.png" alt="gotkd" /></a></li>
            <li><a href="http://www.taekwondo-malley.ch" rel="external" title="Taekwondoo Malley"><img src="img/sponsor/malley.png" alt="Taekwondoo Malley" /></a></li>
            <li><a href="http://www.nocsom.com/en/" rel="external" title="Somali National Olympic Committee"><img src="img/sponsor/somali_national_olympic_committee.png" alt="sponsor" /></a></li>
            <li><a href="#" rel="external" title="Sponsor"><img src="img/sponsor/sponsor.png" alt="sponsor" /></a></li>
            <li><a href="#" rel="external" title="Sponsor"><img src="img/sponsor/sponsor.png" alt="sponsor" /></a></li>
            <li><a href="#" rel="external" title="Sponsor"><img src="img/sponsor/sponsor.png" alt="sponsor" /></a></li>

        </ul>
    </article>
</section>

<hr>

<footer>
    <p><img src="img/logo_footer.jpg" width="100" alt="" />&copy; Company 2013</p>
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
        </fieldset>
    </form>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>