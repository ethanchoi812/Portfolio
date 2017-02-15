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
					<div class="section-heading">
						<h2>Work</h2>
					</div>

					<div class="sub-section">
						<h3>Freelance web developer (2016 - Present)</h3>
						<p>Integer gravida rutrum risus id consequat. Donec tempus est eget lorem scelerisque, nec rutrum enim egestas. Donec elit massa, posuere at est ut, placerat sagittis sapien.</p>
					</div>

					<div class="sub-section">
						<h3>Freelance Communications Executive (2016 - Present)</h3>
						<p>Integer gravida rutrum risus id consequat. Donec tempus est eget lorem scelerisque, nec rutrum enim egestas. Donec elit massa, posuere at est ut, placerat sagittis sapien.</p>
					</div>
				</section>

				<section class="col-2-3">
					<div class="section-heading">
						<h2>Courses</h2>
					</div>

					<div class="sub-section">
						<h3 class="preview-title">freeCodeCamp (2016 - Present)</h3>
						<p>Integer gravida rutrum risus id consequat. Donec tempus est eget lorem scelerisque, nec rutrum enim egestas. Donec elit massa, posuere at est ut, placerat sagittis sapien.</p>
						<a href="#">See my progress</a>
					</div>
				</section>
			</div>
		</section>
		<?php endwhile; ?>
	<?php get_footer(); ?>