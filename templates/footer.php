<div id="footer">
		<div class="container-fluid clearfix">
<div class="row vdivide footer-margin">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- <div class="container"> -->

<div class="col-md-3">
<h3 class="col-title">Company Info</h3>
<p class="cwhite">The #1 Mobile App &amp; Mobile Website Creator For Small Businesses. The fast &amp; easy way for small businesses to create mobile apps &amp; mobile websites.</p>
<hr class="hr-space">
<ul class="list-inline footer-social">
<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/facebook32x32.png" href="www.facebook.com" alt="facebook"></li>
<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/twitter32x32.png" href="www.twitter.com" alt="twitter"></li>
<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/google32x32.png" href="www.googleplus.com" alt="googleplus"></li>
<li><img src="<?php echo bloginfo('template_directory'); ?>/assets/images/social/linkedin32x32.png" href="www.linkedin.com" alt="linkedin"></li>
</ul>

<address>
  <strong class="cwhite">SabalApps</strong><br>
  <h5 class="cwhite">952 Huntley Ave</h5>
  <h5 class="cwhite">Dunedin, FL 34698</h5>
  <h5 class="cwhite">(123) 456-7890</h5>
</address>

<address>
<strong class="cwhite">Email</strong><br>
<a class="cwhite" href="mailto:#">sabalapps@gmail.com</a>
</address>
<div style="padding-bottom: 20px;"></div>
</div><!-- company info ends -->

<div class="col-md-3">
<h3 class="col-title">Browse</h3>
<?php wp_nav_menu( array('menu' => 'Footer Nav', 'menu_class' => 'list-unstyled' ) ); ?>
</div><!-- browse ends -->

<div class="col-md-3">
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

<div class="col-md-3">
<h3 class="col-title">Get Quote</h3>
<p class="cwhite">Lorem ipsum dolor sit amet, maiores ornare ac fermentum, imperdiet ut vivamus a, nam lectus at nunc. imperdiet ut, maiores ornare ac fermentum, maiores ornare ac fermentum, imperdiet ut vivamus a.</p>
<div class="footer-button">
            <a href="/pricing" class="btn btn-default">Request A Quote</a>
          </div>
</div><!-- quote ends -->

</div><!-- col -->
</div><!-- row ends -->
</div><!-- container ends -->

</div><!-- footer ends -->

		<div class="wrapper">
					<div class="container">
							<div class="row bottom-title">
								<div class="col-md-6 col-md-offset-3">
								<p class="text-center">Copyright &copy;2015 <a href="/home">Sabal Apps</a>, LLC - Web &amp; Mobile Development</p>
								</div>
							</div><!-- col -->
					</div><!-- row ends -->
		</div><!-- first wrapper ends -->