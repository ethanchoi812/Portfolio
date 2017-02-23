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
			<section class="col-1-3 sidebar">
				<?php if(is_active_sidebar('contact-widget')) : ?>
		         <?php dynamic_sidebar('contact-widget'); ?>
		       <?php endif; ?>
		    </section>
		</div>
	</section>
	<?php endwhile; ?>
<?php get_footer(); ?>