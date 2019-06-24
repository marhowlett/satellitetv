<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php if ( woodmart_needs_footer() ): ?>
	<?php if ( ! woodmart_is_woo_ajax() ): ?>
		</div><!-- .main-page-wrapper --> 
	<?php endif ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
	<?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
	<?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
		<div class="woodmart-prefooter">
			<div class="container">
				<?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
			</div>
		</div>
	<?php endif ?>
	
	<!-- FOOTER -->
	<footer >

	 <nav>
  <ul>
    <li><a href="/">Home </a>
    <a href="http://satellitetvmexico.com/info">Info  </a>
    <a href="http://localhost/wordpress_prueba/wordpress/">Order</a>
    <a href="#">Testimonials </a>
    <a href="#"> Referral</a>
    <a href="#">  LNB Upgrade Details   </a>
    <a href="https://satellitetvmexico.com/#contacto"> Contact</a></li>
    
  </ul>
</nav>
<p>©2019 SMA Satellite, LLC. All Rights Reserved.   |   Website Problems? <a href="">Click to send email</a></p>

	</footer>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="woodmart-close-side"></div>
<?php wp_footer(); ?>
</body>
</html>