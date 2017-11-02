<?php get_header(); ?>
<main class="main">

			<section id="main" class="banner topwrapper">
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-4 col-md-offset-4 col-xs-12">
					<div class="header-logo">
						<?php
							if (have_posts() ) :query_posts('cat=2');
							while (have_posts()) : the_post();
						?>
					<img src="<?php the_field('logo'); ?>" alt="">
					</div>
				</div>
						<?php endwhile; endif;?>
										<?php
						if (have_posts() ) :query_posts('cat=2');
						while (have_posts()) : the_post();
					?>
				<div class="col-md-4 col-xs-4">
					<div class="header-contact">
						<p class="header-contact__email">
							<?php the_field('email'); ?>
						</p>
						<p class="header-contact__tel">
							<a class="header-contact__link" href="tel:+380<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a>
						</p>
					<?php endwhile; endif;?>
					</div>
				</div>
					<div class="col-md-12 col-xs-12">
					<?php
						if (have_posts() ) :query_posts('cat=2');
						while (have_posts()) : the_post();
					?>
						<h1 class="banner__title">
							<?php the_field('title'); ?>
						</h1>
<!-- 						<div class="banner__btn">
							<a href="#" class="banner__link">
							<?php the_field('btn'); ?>
							</a>
						</div> -->
					<?php endwhile; endif;?>

					</div>
				</div>
				</div>
			</section>
		</div>
<div class="container-fluid">
<div class="row">
<section class="category" style="width: 100%">
	<?php
		if (have_posts() ) :query_posts('cat=4');
		while (have_posts()) : the_post();
	?>
		<a href="#atlas" class="category__link category__link_flowers" style="background-image: url(<?php the_field('img_1'); ?>);">
				<div class="category__title">
					<span class="category__text"><?php the_field('title_1'); ?></span>
				</div>
		</a>
		<a href="#decupage" class="category__link category__link_decupage" style="background-image: url(<?php the_field('img_2'); ?>);">
				<div class="category__title">
					<span class="category__text"><?php the_field('title_2'); ?></span>
				</div>
		</a>
		<a href="#accesories" class="category__link category__link_accesories" style="background-image: url(<?php the_field('img_3'); ?>);">
				<div class="category__title">
					<span class="category__text"><?php the_field('title_3'); ?></span>
				</div>
		</a>
		<a href="#" class="category__link category__link_improvization" style="background-image: url(<?php the_field('img_4'); ?>);">
				<div class="category__title">
					<span class="category__text"><?php the_field('title_4'); ?></span>
				</div>
		</a>
	<?php endwhile; endif;?>
</section>
</div>
</div>
			<section class="auction">
				<a href="http://liliyagetman.com/blog/" class="auction__link">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 col-xs-12">
<!-- 								<img src="<?php echo get_template_directory_uri(); ?>/img/auctiontop.png" alt=""> -->
								<h2 class="auction__title">Авторский блог</h2>
<!-- 								<img src="<?php echo get_template_directory_uri(); ?>/img/auctionbot.png" alt=""> -->
							</div>
						</div>
					</div>
				</a>
			</section>
			<?php
				if (have_posts() ) :query_posts('cat=6');
				while (have_posts()) : the_post();
			?>
			<section class="creator" style="background-image: url(<?php the_field('img'); ?>);">
				<div class="container-fluid creator_vision">
					<div class="row">
						<div class="col-md-4 col-md-offset-6 col-xs-offset-0 col-sm-6">
							<h2 class="creator__name">
								<?php the_field('title'); ?>
							</h2>
							<p class="creator__description">
								<?php the_field('description'); ?> 
							</p>
										<?php endwhile; endif;?>
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
			</section>
			<?php
				if (have_posts() ) :query_posts('cat=6');
				while (have_posts()) : the_post();
			?>
			<div class="container-fluid creator_mobile">
				<div class="row">
					<div class="col-md-0 col-xs-12">
						<h2 class="creator__name">
								<?php the_field('title'); ?>
							</h2>
							<p class="creator__description">
								<?php the_field('description'); ?>
							</p>
			<?php endwhile; endif;?>
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
			<section id="gal" class="gallery">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<h2 class="gallery__title">Галлерея</h2>
							<nav class="gallery-menu">
<!-- <?php

   $args = array("post_type"  => "gallery");
   $gallery = new WP_Query($args);

   if($gallery->have_posts()) : 
      while($gallery->have_posts()) : 
         $gallery->the_post();
?>

         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>      
      
<?php
      endwhile;
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
?> -->


							<?php
								if (have_posts() ) :query_posts('cat=4');
								while (have_posts()) : the_post();
							?>
								<ul class="gallery-menu__list">
									<li class="gallery-menu__item">
										<a  class="gallery-menu__link tab-btn__1 tab-selector active"><?php the_field('title_1'); ?></a>
									</li>
									<li class="gallery-menu__item">
										<a  class="gallery-menu__link tab-btn__2 tab-selector"><?php the_field('title_2'); ?></a>
									</li>
									<li class="gallery-menu__item">
										<a class="gallery-menu__link tab-btn__3 tab-selector"><?php the_field('title_3'); ?></a>
									</li>
									<li class="gallery-menu__item">
										<a  class="gallery-menu__link tab-btn__4 tab-selector"><?php the_field('title_4'); ?></a>
									</li>
								</ul>
							<?php endwhile; endif;?>
							</nav>
							<div id="tab-1" class="atlas tab-target">
							<?php
								if (have_posts() ) :query_posts('cat=9');
								while (have_posts()) : the_post();
							?>
								<div class="col-md-4">
									<div class="gallery-box">
										<img src="<?php the_field('img'); ?>" alt="" class="gallery-box__img">
										<h3 class="gallery-box__title"><?php the_title(); ?></h3>
										<p class="gallery-box__pay"><?php the_field('pay'); ?>
										</p>
									</div>
								</div>
							<?php endwhile; endif;?>
							</div>
							<div id="tab-2" class="decupage tab-target">
															<?php
								if (have_posts() ) :query_posts('cat=11');
								while (have_posts()) : the_post();
							?>
								<div class="col-md-4">
									<div class="gallery-box">
										<img src="<?php the_field('img'); ?>" alt="" class="gallery-box__img">
										<h3 class="gallery-box__title"><?php the_title(); ?></h3>
										<p class="gallery-box__pay"><?php the_field('pay'); ?>
										</p>
									</div>
								</div>
							<?php endwhile; endif;?>
							</div>
							<div id="tab-3" class="inv tab-target">
							<?php
								if (have_posts() ) :query_posts('cat=12');
								while (have_posts()) : the_post();
							?>
								<div class="col-md-4">
									<div class="gallery-box">
										<img src="<?php the_field('img'); ?>" alt="" class="gallery-box__img">
										<h3 class="gallery-box__title"><?php the_title(); ?></h3>
										<p class="gallery-box__pay"><?php the_field('pay'); ?>
										</p>
									</div>
								</div>
							<?php endwhile; endif;?>
							</div>
							<div id="tab-4" class="improvization tab-target">
							<?php
								if (have_posts() ) :query_posts('cat=13');
								while (have_posts()) : the_post();
							?>
								<div class="col-md-4">
									<div class="gallery-box">
										<img src="<?php the_field('img'); ?>" alt="" class="gallery-box__img">
										<h3 class="gallery-box__title"><?php the_title(); ?></h3>
										<p class="gallery-box__pay"><?php the_field('pay'); ?>
										</p>
									</div>
								</div>
							<?php endwhile; endif;?>
							</div>
					</div>
				</div>
			</section>
			<section class="pay">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 col-md-offset-2 col-xs-offset-0 col-xs-0">
						<?php
							if (have_posts() ) :query_posts('cat=7');
							while (have_posts()) : the_post();
						?>
							<img class="pay__img" src="<?php the_field('img'); ?>" alt="pay">
						</div>
						<div class="col-md-5 col-xs-12">
							<h2 class="pay__title">
								<?php the_field('title'); ?>
							</h2>
							<p class="pay__number">
								<?php the_field('number'); ?>
							</p>
						<?php endwhile; endif;?>
						</div>
					</div>
				</div>
			</section>
			<section class="reviews">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h2 class="reviews__title">
								Отзывы
							</h2>
							<div class="reviews__slider">
							<?php
								if (have_posts() ) :query_posts('cat=8');
								while (have_posts()) : the_post();
							?>
									<div class="reviews__avatar" style="background-image: url(<?php the_field('avatar'); ?>);">
									</div>
							<?php endwhile; endif;?>
							</div>
							<div class="reviews-text__slider">
							<?php
								if (have_posts() ) :query_posts('cat=8');
								while (have_posts()) : the_post();
							?>
								<div class="review-text__block">
									<h3 class="reviews-text__name"><?php the_title(); ?></h3>
									<p class="reviews-text__description"><?php the_field('description'); ?></p>
							
								</div>
							<?php endwhile; endif;?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>