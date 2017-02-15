<?php get_header(); ?>
	<section class="row-alt">
	  <div class="lead container">
	    <h1>Articles</h1>
	  </div>
	</section>
	<?php while(have_posts()) : the_post(); ?>
		<section class="row-post">
			<div class="grid">
				<section class="col-2-3">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_excerpt(); ?></p>
					<p class="read-more-blog"><a href="<?php the_permalink(); ?>">Read more</a></p>
				</section>
			</div>
		</section>
	<?php endwhile; ?>
<?php get_footer(); ?>