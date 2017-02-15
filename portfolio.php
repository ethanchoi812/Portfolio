<?php get_header(); ?>
	
	<section class="row-alt">
	  <div class="lead container">
	    <h1>Portfolio</h1>
	  </div>
	</section>

	<section class="row portfolio-showcase">
		<div class="grid">
			<section class="col-2-3">
				<div class="section-heading">
					<h2>latest work</h2>
				</div>
				<div class="sub-section">
					<h3><a href="<?php echo get_theme_mod('showcase_url', 'http://www.iwebsg.com/portfolio'); ?>"><?php echo get_theme_mod('showcase_item_title', 'My Awesome App'); ?></a></h3>
					<p><?php echo get_theme_mod('showcase_text', 'My Awesome App was made with plain awesomeness Javascript'); ?></p>
					<h5 class="tags javascript-tag"><a href=""><?php echo get_theme_mod('showcase_tag', 'Javascript'); ?></a></h5>
				</div>
				<h3 class="read-more"><a href="portfolio.html">See More!</a></h3>
			</div>
		</section>
	</section>
<?php get_footer(); ?>