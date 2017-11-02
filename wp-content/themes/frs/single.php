<?php get_header();?>
<main class="main">
	<section class="post">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
			<h2 class="post__title"><?php the_title(); ?></h2>
		</div>	
				<div class="col-md-12">
				<img src="<?php the_field("img"); ?>" alt="" class="post__img">
			<?php while (have_posts()): the_post();?>
				<p class="blog-infortaion"><?php echo get_the_content();?></p>
				</div>
				<div class="col-md-12 col-xs-12">
			<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>