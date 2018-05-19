<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psu
 */

?>

<div class="section">
	<div class="container">

		<?php if (!is_page("Contact Us")) : ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'psu' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php else : ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'psu' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				</div><!-- .col-xs -->
				<div class="row col-xs-12 col-sm-12 col-md-6">
					<div class="section contact-form-contain">
						<div class="contact-form">
							<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]') ?>
						</div><!-- .container -->
					</div><!-- .row -->
				</div><!-- .col-xs -->
			</article><!-- #post-## -->
		<?php endif; ?>

		<?php if (is_page("Big Deals")) :
			echo do_shortcode('[foogallery id="45"]');
		endif; ?>
		
	</div><!-- .container -->
</div><!-- .section -->

<?php if (is_page("Sell My House")) : ?>
	<div class="row section sell-form">
		<div class="container">
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]') ?>
		</div><!-- .container -->
	</div><!-- .row -->
<?php endif; ?>