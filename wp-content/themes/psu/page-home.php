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
					    <div class="item active" style="background-image:url('<?php echo get_template_directory_uri() ?>/library/images/home.jpg');">
					    	<div class="tagline-container">
					    		<h1>As-is properties</h1>
					    	</div><!-- .tagline-container -->
					    </div><!-- .item -->

					    <div class="item" style="background-image:url('<?php echo get_template_directory_uri() ?>/library/images/home1.jpg');">
					    	<div class="tagline-container">
					    		<h1>All cash deals</h1>
					    	</div><!-- .tagline-container -->
					    </div><!-- .item -->

					    <div class="item" style="background-image:url('<?php echo get_template_directory_uri() ?>/library/images/home2.jpg');">
					    	<div class="tagline-container">
					    		<h1>Close quickly</h1>
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
						<p class="big">We aim to... Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
						<hr>
						<div class="col-lg-4 col-md-4 hidden-xs col-sm-4">
							<i class="ss-dollarsign ss-symbolicons-block"></i>
							<h2>We Buy</h2>
							<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
							<div class="centeralign"><a class="btn" id="buy" href="<?php echo get_site_url(); ?>/sell-my-house">LEARN MORE</a></div>
						</div>
						<div class="col-lg-4 col-md-4 hidden-xs col-sm-4">
							<i class="ss-key ss-glyphish-filled"></i>
							<h2>We Rent</h2>
							<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
							<div class="centeralign"><a class="btn" id="rent" href="<?php echo get_site_url(); ?>/contact">LEARN MORE</a></div>
						</div>
						<div class="col-lg-4 col-md-4 hidden-xs col-sm-4">
							<i class="ss-home ss-glyphish-filled"></i>
							<h2>We Sell</h2>
							<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
							<div class="centeralign"><a class="btn" id="sell" href="<?php echo get_site_url(); ?>/big-deals">LEARN MORE</a></div>
						</div>
					</div><!-- container -->
				</div><!-- .page-content -->
			</div><!-- .row -->
			<div class="page-content home hidden-sm hidden-md hidden-lg">
				<div class="row">
					<div class="col-xs-12 layer">
						<i class="ss-dollarsign ss-symbolicons-block"></i>
						<h2>We Buy</h2>
						<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
						<div class="centeralign"><a class="btn" href="<?php echo get_site_url(); ?>/sell-my-house">LEARN MORE</a></div>
					</div><!-- .col-xs-12 -->
				</div><!-- .row -->
				<div class="row center">
					<div class="col-xs-12 layer">
						<i class="ss-key ss-glyphish-filled"></i>
						<h2>We Rent</h2>
						<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
						<div class="centeralign"><a class="btn" href="<?php echo get_site_url(); ?>/contact">LEARN MORE</a></div>
					</div><!-- .col-xs-12 -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-xs-12 layer">
						<i class="ss-home ss-glyphish-filled"></i>
						<h2>We Sell</h2>
						<p>Lorem ipsum dolor sit amet, an sumo case erant usu, amet harum mundi ut qui, id exerci facilis vivendum nam. Pro eu illud audiam liberavisse.</p>
						<div class="centeralign"><a class="btn" href="<?php echo get_site_url(); ?>/big-deals">LEARN MORE</a></div>
					</div><!-- col-xs-12 -->
				</div><!-- .row -->
			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
