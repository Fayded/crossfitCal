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
		<div id="footer-green-bar"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<a href = "localhost:8888/crossfitCal/about">   About   </a> | <a href = "localhost:8888/crossfitCal/getstarted">   Get Started   </a> |  
		<a href = "localhost:8888/crossfitCal/schedule">   Schedule   </a>|  <a href = "localhost:8888/crossfitCal/successstories">   Success Stories   </a> |
		 <a href = "localhost:8888/crossfitCal/gallery">   Gallery   </a> |  <a href = "localhost:8888/crossfitCal/wod">   WOD   </a> |
		  <a href = "localhost:8888/crossfitCal/contact">   Contact   </a> |  <a href = "localhost:8888/crossfitCal/blog">   BLOG   </a>
		<p> 
		</p>	
		<div class="site-info">
			<?php do_action( 'crossfit_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'crossfit' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'crossfit' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'crossfit' ), 'crossfit', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>