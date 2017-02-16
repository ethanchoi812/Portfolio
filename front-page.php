	<?php get_header(); ?>

	<section class="container hero">
			<h2><?php echo get_theme_mod('hero_header', 'iwebsg'); ?></h2>
			<h3><?php echo get_theme_mod('hero_subheader', 'iwebsg'); ?></em></h3>
			<p><?php echo get_theme_mod('hero_description', 'iwebsg'); ?></p>
			<?php if(get_theme_mod('hero_button', 'iwebsg.com/contact') != '') : ?>
				<a href="<?php echo get_theme_mod('hero_button', 'iwebsg'); ?>" class="btn btn-alt"><?php echo get_theme_mod('hero_button_text', 'hire me!'); ?></a>
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
					<h2>latest work</h2>
				</div>
				<div class="sub-section">
					<h3><a href="<?php echo get_theme_mod('showcase_url', 'http://www.iwebsg.com/portfolio'); ?>"><?php echo get_theme_mod('showcase_title', 'My Awesome App'); ?></a></h3>
					<p><?php echo get_theme_mod('showcase_text', 'My Awesome App was made with plain awesomeness Javascript'); ?></p>
					<h5 class="tags javascript-tag"><a href=""><?php echo get_theme_mod('showcase_tag', 'Javascript'); ?></a></h5>
				</div>
				<h3 class="read-more"><a href="portfolio.html">See More!</a></h3>
			</div>
		</section>
	</section>
<?php get_footer(); ?>