<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Hope
 */

?>

	<footer id="colophon" class="site-footer" style="background-color:#2889A8; text-align:center; height:50px; padding-top:12px">
		<div class="site-info">
			<a style=" color:#fff;" href="<?php echo esc_url( __( 'https://newhopefield.simrangarcha.com/group5/', 'new-hope' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '&#174; 2021 | New Hope Field Of Dreams | All rights reserved' ), '' );
				?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '' ), '' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
