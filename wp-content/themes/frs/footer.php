		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="social">
					<?php
						if (have_posts() ) :query_posts('cat=3');
						while (have_posts()) : the_post();
					?>
						<div class="social">
							<a href="<?php the_field('vk'); ?>" class="social__link">
								<i class="fa fa-vk social__icon" aria-hidden="true"></i>
							</a>
							<a href="<?php the_field('facebook'); ?>" class="social__link">
								<i class="fa fa-facebook social__icon" aria-hidden="true"></i>
							<a href="<?php the_field('instagram'); ?>" class="social__link">
								<i class="fa fa-instagram social__icon" aria-hidden="true"></i>
							</a>
					</div>
					<?php endwhile; endif;?>
					</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/Scrollto/jquery.scrollTo.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js">"></script>
</body>
</html>