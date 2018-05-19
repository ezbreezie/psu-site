<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psu
 */

?>

<?php if (is_page("Contact Us")) : ?>
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3123985.4930909993!2d-76.97449148754481!3d40.12519384451971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c0fb959e00409f%3A0x2cd27b07f83f6d8d!2sNew+Jersey!5e0!3m2!1sen!2sus!4v1500531413170" width="100%" height="300" frameborder="0" style="border-bottom:2px solid green;" allowfullscreen></iframe>
	</div>
<?php endif; ?>

<div class="section">
	<div class="container">

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

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'psu' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</article><!-- #post-## -->
		
	</div><!-- .container -->
</div><!-- .section -->

<?php if (is_page("Big Deals")) : ?>
	<div class="row neighborhoods">
		<div class="container">
			<h2>Neighborhoods</h2>
			<ul>
				<li>Brick</li>
				<li>Camden</li>
				<li>Allentown</li>
				<li>Philadelphia</li>
				<li>Brick</li>
				<li>Camden</li>
			</ul>
		</div><!-- .container -->
	</div><!-- .row -->
	<div class="row section">
		<div class="container">
			<?php echo do_shortcode('[foogallery id="45"]') ?>
		</div><!-- .container -->
	</div><!-- .row -->

<?php elseif (is_page("Sell My House")) : ?>
	<style>
	.page-id-15 .section{
		padding:0 !important;
		margin-bottom:0;
	}
	.sell-form{
		margin-top:0 !important;
	}
	.sell-form .container{
		padding:0 !important;
	}
	</style>
	<div class="row section sell-form">
		<div class="container">
			<h1 class="small">Tell us about your house.</h1>
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]') ?>
		</div><!-- .container -->
	</div><!-- .row -->

<?php elseif (is_page("Contact Us")) : ?>

	<!-- <div class="row section">
		<div class="container contact-form">
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]') ?> -->
		<!-- </div> --><!-- .container -->
	<!-- </div> --><!-- .row -->

<?php endif; ?>