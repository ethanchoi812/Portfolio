	<?php get_header(); ?>

	<section class="container hero">
			<h2><?php echo get_theme_mod('hero_header', 'Welcome to my portfolio site!'); ?></h2>
			<h3><?php echo get_theme_mod('hero_subheader', 'This is my portfolio site'); ?></em></h3>
			<p><?php echo get_theme_mod('hero_description', 'This is my portfolio site'); ?></p>
			<?php if(get_theme_mod('hero_button', 'iwebsg.com/contact') != '') : ?>
				<a href="<?php echo get_theme_mod('hero_button_link', 'iwebsg.com/contact'); ?>" class="btn btn-alt"><?php echo get_theme_mod('hero_button_text', 'hire me!'); ?></a>
			<?php endif; ?>
			<?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
				<a href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-2x fw"></i></a>
			<?php endif; ?>
			<?php if(get_theme_mod('github_url', 'http://www.github.com') != '') : ?>
				<a href="<?php echo get_theme_mod('github_url', 'http://www.github.com'); ?>" target="_blank"><i class="fa fa-github fa-2x fw"></i></a>
			<?php endif; ?>
			<?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
				<a href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-2x fw"></i></a>
			<?php endif; ?>
		</section>

	<section class="row portfolio-showcase">
		<div class="grid">
			<section class="col-2-3">
				<div class="section-heading">
					<h2>latest projects</h2>
				</div>
				<a href="<?php echo get_theme_mod('showcase_url_a', 'http://www.iwebsg.com/portfolio'); ?>">
				<section class="sub-section teaser group">
						<img class="showcase-img" src="<?php echo get_theme_mod('showcase_image_a', get_bloginfo('template_directory').'/img/default.jpg'); ?>">
						<h3><?php echo get_theme_mod('showcase_title_a', 'My Awesome App'); ?></h3>
					<p><?php echo get_theme_mod('showcase_text_a', 'My Awesome App was made with plain awesomeness Javascript'); ?></p>
					
				</section>
				</a>
				<section class="sub-section teaser group">
					<a href="<?php echo get_theme_mod('showcase_url_b', 'http://www.iwebsg.com/portfolio'); ?>">
						<img class="showcase-img" src="<?php echo get_theme_mod('showcase_image_b', get_bloginfo('template_directory').'/img/default.jpg'); ?>">
						<h3><?php echo get_theme_mod('showcase_item_title_b', 'My Awesome App'); ?></h3>
					</a>
					<p><?php echo get_theme_mod('showcase_text_b', 'My Awesome App was made with plain awesomeness Javascript'); ?></p>
				</section>
				<section class="sub-section teaser group">
					<a href="<?php echo get_theme_mod('showcase_url_c', 'http://www.iwebsg.com/portfolio'); ?>">
						<img class="showcase-img" src="<?php echo get_theme_mod('showcase_image_c', get_bloginfo('template_directory').'/img/default.jpg'); ?>">
						<h3><?php echo get_theme_mod('showcase_item_title_c', 'My Awesome App'); ?></h3>
					</a>
					<p><?php echo get_theme_mod('showcase_text_c', 'My Awesome App was made with plain awesomeness Javascript'); ?></p>
				</section>
				<div class="read-more">
					<a href="iwebsg.com/portfolio"><h3>See More!</h3></a>
				</div>
			</section>
			<section class="col-1-3 sidebar">
				<?php if(is_active_sidebar('sidebar')) : ?>
         			 <?php dynamic_sidebar('sidebar'); ?>
        		<?php endif; ?>
			</section>
		</div>
	</section>
<?php get_footer(); ?>