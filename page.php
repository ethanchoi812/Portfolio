<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
	<section class="row-alt">
	  <div class="lead container">
	    <h1><?php the_title(); ?></h1>
	  </div>
	</section>

	<section class="row">
		<div class="grid">
			<?php the_content(); ?>
		</div>
	</section>
	<?php endwhile; ?>
<?php get_footer(); ?>