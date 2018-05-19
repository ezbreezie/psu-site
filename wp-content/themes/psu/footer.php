<?php
/**
 * @package psu
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="row site-footer" role="contentinfo">
			
			<div class="container">
				<div class="social media">
					<h3>Connect with Us</h3>
					<?php 
					$facebook = get_field('facebook_account', 17);
					$twitter = get_field('twitter_account', 17);
					$linkedin = get_field('linked_account', 17);
					if (!empty($facebook)){ ?>
						<a target="_blank" href="http://facebook.com/<?php echo $facebook; ?>"><i class="ss-facebook"></i></a>
					<?php }
					if (!empty($twitter)){ ?>
						<a target="_blank" href="http://twitter.com/<?php echo $twitter; ?>"><i class="ss-twitter"></i></a>
					<?php }
					if (!empty($linkedin)){ ?>
						<a target="_blank" href="http://linkedin.com/in/<?php echo $linkedin; ?>"><i class="ss-linkedin"></i></a>
					<hr>
					<?php } ?>
				</div>
				<p>Copyright &copy; 2017 Property Solutions Unlimited LLC. All Rights Reserved.</p>

			</div>

		</footer><!-- #colophon -->

	</div><!-- content-container -->

</div><!-- #page/.container-fluid -->

<?php wp_footer(); ?>

</body>
</html>
