<?php /* Template Name: blog */ ?>
<?php get_header(); ?>
<main class="main">
	<section class="blog">
		<div class="container-fluid">
			<div class="row">
					<h2 class="blog__title">blog</h2>
							<?php
						if (have_posts() ) :query_posts('cat=5');
						while (have_posts()) : the_post();
					?>
					<div class="col-md-12">
					<article class="blog-post">
						<h3 class="blog-post__title">
							<a href="<?php the_permalink(); ?>"" class="blog-post__link">
							<?php the_title(); ?>	
							</a>
						</h3>
							<img src="<?php the_field("img"); ?>" alt="" class="blog-post__img">
							<p class="blog-post__date">Дата поста: <?php echo get_the_date('n-j-Y'); ?></p>
							<div class="blog-post__text"><?php the_excerpt(); ?>
							</div>
						<hr class="col-md-8 col-md-offset-2 blog-post__line">
					</article>
					<?php endwhile; endif;?>
				</div>
										<div class="col-md-12">
						 <nav id="nav-posts">
						    <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
						    <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
					 	</nav>
					 	</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>