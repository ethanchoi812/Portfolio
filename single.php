<?php get_header(); ?>
	<section class="row-alt">
	  <div class="lead container">
	    <h1><?php the_title(); ?></h1>
	  </div>
	</section>
	<?php while(have_posts()) : the_post(); ?>
		<section class="row-post">
			<div class="grid">
				<section class="col-2-3">
					<p><?php the_content(); ?></p>
					<br>
					<div class="go-back">
						<a href="www.iwebsg.com/articles">Go back</a>
					</div>
				</section>
			</div>
		</section>
	<?php endwhile; ?>
<?php get_footer(); ?>