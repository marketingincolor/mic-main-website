<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
  <div class="top-footer">
  	<div class="grid-container fluid">
  	  <div class="grid-x relative">
  	    <div class="medium-8 cell">
  	    	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bricks.jpg" alt="Lets' Work Together">
  	    </div>
  	    <div class="work-together absolute">
  	    	<div class="grid-x">
  	    		<div class="medium-7 medium-offset-1 cell">
  	    			<h2>Let's Work Together</h2>
  	    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ad, facere dicta expedita beatae et atque nemo, blanditiis eaque itaque dignissimos adipisci minima eos assumenda quas quidem harum sequi ea?</p>
  	    		</div>
  	    		<div class="medium-12 cell">
  	    			<a href="#" class="contact-us">Contact Us -></a>
  	    		</div>
  	    	</div>
  	    </div>
  	  </div>
  	</div>
  </div>
  <div class="bottom-footer">
  	<div class="grid-container">
  		<div class="grid-x">
  			<div class="medium-5 cell">
  				<ul class="address">
  					<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/mic-bug.png" alt="Marketing in Color"></li>
						<li>
							<span>1515 N. Marion St, Suite #2 Tampa, FL 33602</span><br>
							<span>(813)258-3771</span><br>
							<span>
								<ul class="social-icons">
									<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
						  </span>
						</li>
  				</ul>
  			</div>
  			<div class="medium-7 cell text-right">
  				<p><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bbb.png" alt="Better Business Bureau"></p>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y'); ?> Marketing In Color</li> &nbsp;|&nbsp;
						<li><a href="#">Privacy Policy</a></li> &nbsp;|&nbsp;
						<li><a href="#">SharpSpring Login</a></li>
					</ul>
  			</div>
  		</div>
  	</div>
  </div>
</footer>

<script src="<?php bloginfo('template_directory'); ?>/dist/assets/js/owl.carousel.min.js"></script>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>