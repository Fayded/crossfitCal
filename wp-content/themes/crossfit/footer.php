<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package crossfit
 */

?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
    		<div class="footercf journal">
			<img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" />
        		<p>The Crossfit Journal is a fitness, health, and lifestyle publication dedicated to the improvement of athletic performance and quality of life.</p>
    		</div>
		<div class="footercf signup">
    			<h1>Sign Up For Classes Today</h1>
    			<p>At Cave CrossFit you will receive something much more valuable than just a workout.  If you're ready to embarkon a truly life-changing journey.</p>
		</div>
		<div id="footerNav">
			<ul>
			<li><a href="/crossfitCal/about">About</a></li>
			<li><a href="/crossfitCal/getstarted">Get Started</a></li>  
			<li><a href="/crossfitCal/schedule">Schedule</a></li>
			<li><a href="/crossfitCal/successstories">Success Stories</a></li>
			<li><a href="/crossfitCal/gallery">Gallery</a></li>
			<li><a href="/crossfitCal/wod">WOD</a></li>
			<li><a href="/crossfitCal/contact">Contact</a></li>
			<li><a href="/crossfitCal/blog">Blog</a></li>
			</ul>
		</div>
		<p>© 2013 Cave CrossFit, All rights reserved</p>
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>