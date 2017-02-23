<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
	<section class="row-alt">
	  <div class="lead container">
	    <h1><?php the_title(); ?></h1>
	  </div>
	</section>

	<section class="row">
		<div class="grid">
		<section class="col-2-3">	
			<?php the_content(); ?>
			</section>
		</div>
	</section>
	<?php endwhile; ?>
<?php get_footer(); ?>