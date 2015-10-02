<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Clinton_Harn
 * @since Clinton Harn 0.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

					

					<?php
						// Post thumbnail.
						twentyfifteen_post_thumbnail();
					?>

					<div class="entry-content">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading %s', 'twentyfifteen' ),
								the_title( '<span class="screen-reader-text">', '</span>', false )
							) );

							wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
						?>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<h2>Contact us</h2>
						<h3>A Result of Love and Passion</h3>
						<div class="contact">
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-contact-info.png" width="62" height="62" alt="For information on services">
								<p>
									<a href="mailto:info@clintonharn.com">info@<br/>clintonharn.com</a>
									For information on services
								</p>
							</div>
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-contact-rates.png" width="30" height="62" alt="For information on pricing & rates">
								<p>
									<a href="mailto:rates@clintonharn.com">rates@<br/>clintonharn.com</a>
									For information on pricing & rates
								</p>
							</div>
							<div>
								<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-contact-clinton.png" width="58" height="61" alt="For direct contact to clinton">
								<p>
									<a href="mailto:rates@clintonharn.com">rates@<br/>clintonharn.com</a>
									For direct contact to clinton
								</p>
							</div>
						</div>


					</div><!-- .entry-content -->

					<?php
						// Author bio.
						if ( is_single() && get_the_author_meta( 'description' ) ) :
							get_template_part( 'author-bio' );
						endif;
					?>

					

					
					<footer class="entry-footer">
						<!-- <?php twentyfifteen_entry_meta(); ?> //-->

						
					</footer><!-- .entry-footer -->

				</article><!-- #post-## -->
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
