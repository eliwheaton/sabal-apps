<div class="footer">
<div class="container">
	<div class="row vdivide footer-margin">

		<div class="col-lg-3">
			<h3 class="col-title">Company Info</h3>
			<p>The #1 Mobile App &amp; Mobile Website Creator For Small Businesses. The fast &amp; easy way for small businesses to create mobile apps &amp; mobile websites.</p>
			<hr class="hr-space">
			<ul class="list-inline footer-social">
			<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/facebokcirclecolor32x32.png" href="www.facebook.com" alt="facebook"></li>
			<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/twittercirclecolor32x32.png" href="www.twitter.com" alt="twitter"></li>
			<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/google-pluscirclecolor32x32.png" href="www.googleplus.com" alt="googleplus"></li>
			<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/linkedincirclecolor32x32.png" href="www.linkedin.com" alt="linkedin"></li>
			</ul>

			<address>
  			<strong>SabalApps</strong><br>
  			952 Huntley Ave<br>
  			Dunedin, FL 34698<br>
  			<abbr title="Phone">P:</abbr> (123) 456-7890
			</address>

		<address>
		<strong>Email</strong><br>
		<a href="mailto:#">sabalapps@gmail.com</a>
		</address>
		</div><!-- company info ends -->

		<div class="col-lg-3">
			<h3 class="col-title">Browse</h3>
			<?php wp_nav_menu( array('menu' => 'Footer Nav', 'menu_class' => 'list-unstyled', 'footer-browse' ) ); ?>
		</div><!-- browse ends -->

		<div class="col-lg-3">
			<h3 class="col-title">Latest From Blog</h3>
			<hr>
			<ul>
			<?php
	$args = array( 'numberposts' => '5', 'tax_query' => array(
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-aside',
				'operator' => 'NOT IN'
			), 
			array(
				'taxonomy' => 'post_format',
				'field' => 'slug',
				'terms' => 'post-format-image',
 				'operator' => 'NOT IN'
			)
	) );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
	}
?>
			</ul>
		</div><!-- latest blog ends -->

		<div class="col-lg-3">
			<h3 class="col-title">Get Quote</h3>
			<hr>
			<p>Lorem ipsum dolor sit amet, maiores ornare ac fermentum, imperdiet ut vivamus a, nam lectus at nunc. imperdiet ut, maiores ornare ac fermentum, maiores ornare ac fermentum, imperdiet ut vivamus a.</p>
			<div class="footer-button">
            <a href="#" class="btn btn-default">Request A Quote</a>
          </div>
		</div><!-- quote ends -->

	</div><!-- row ends -->
	<hr>
</div><!-- container ends -->
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p class="text-center">Copyright &copy;2015 <a href="/home">Sabal Apps</a>, LLC - Web &amp; Mobile Development</p>
		</div>
	</div>
</div>
</div>
































<!--
<footer id="footer" class="clearfix light">

				
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="footer-content text-center padding-ver-clear">
										<div class="logo-footer"><img id="logo-footer" class="center-block" src="<?php echo bloginfo('template_directory'); ?>/assets/images/SabalLogo copy.png" alt=""></div>
										<p class="footer_paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Lorem ipsum dolor sit amet, illo vel dolorum soluta consectetur.</p>
										<ul class="list-inline mb-20">

											<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>    952 Huntley Ave Dunedin, FL 34698</li>

											<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a href="tel:+00 1234567890" class="link-dark">    123-456-7890</a></li>

											<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@theproject.com" class="link-dark">    sabalapps@gmail.com</a></li>

										</ul>   
										<ul class="social-links margin-clear">
											<li><a target="_blank" href="http://www.facebook.com"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/icon--facebook55.png" alt=""></a></li>

											<li><a target="_blank" href="http://www.twitter.com"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/icon--twitter1.png" alt=""></a></li>

											<li><a target="_blank" href="http://plus.google.com"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/icon--google116.png" alt=""></a></li>

											<li><a target="_blank" href="http://www.linkedin.com"><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/icon--linkedin11.png" alt=""></a></li>
										</ul>
										
										<p class="text-center margin-clear">Copyright © 2015. All Rights Reserved</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</footer>
			-->