<?php
/**
 * Template Name: Home
 * @package psu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<div id="homeCarousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#homeCarousel" data-slide-to="1"></li>
					    <li data-target="#homeCarousel" data-slide-to="2"></li>
					</ol>

				  	<!-- Slides custom setup -->
					<div class="carousel-inner">
					    <div class="item active" style="background-image:url('<?php echo the_field('slider_image_1');?>">
					    	<div class="tagline-container">
					    		<h1><?php echo the_field('slider_tagline_1'); ?></h1>
					    	</div><!-- .tagline-container -->
					    </div><!-- .item -->

					    <div class="item" style="background-image:url('<?php echo the_field('slider_image_2');?>');">
					    	<div class="tagline-container">
					    		<h1><?php echo the_field('slider_tagline_2'); ?></h1>
					    	</div><!-- .tagline-container -->
					    </div><!-- .item -->

					    <div class="item" style="background-image:url('<?php echo the_field('slider_image_3');?>');">
					    	<div class="tagline-container">
					    		<h1><?php echo the_field('slider_tagline_3'); ?></h1>
					    	</div><!-- .tagline-container -->
					    </div><!-- .item -->
					</div>

					<a class="left carousel-control" href="#homeCarousel" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#homeCarousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					    <span class="sr-only">Next</span>
					</a>
				</div><!-- #myCarousel -->
			</div><!-- .row -->
			<div class="row">
				<div class="page-content home">
					<div class="container section">
						<h1>The key to making your property challenges easier.</h1>
						<?php $heading = get_field('header_paragraph');
						if (!empty($heading)){ ?>
							<p class="big"><?php echo $heading; ?></p>
						<?php } ?>
						<hr>
						<img class="hidden-xs" src="<?php echo get_template_directory_uri(); ?>/library/images/flowchart.png" alt="flowchart" style="max-width: 100%;width: 600px;margin: 0 auto;display: block;"/>
					</div><!-- container -->
				</div><!-- .page-content -->
			</div><!-- .row -->
			<div class="page-content home hidden-sm hidden-md hidden-lg">
				<div class="row">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/flowchart2.png" alt="flowchart" style="max-width:100%;margin: auto;width: 150px;display: block;margin-bottom:50px;"/>
				</div><!-- .row -->
			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
