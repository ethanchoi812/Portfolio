	<?php get_header(); ?>

	<section class="container hero">
			<h2>Hi, I'm Ethan Choi</h2>
			<h3>web designer &amp; developer | HTML5, CSS3, Javascript &amp; Wordpress</em></h3>
			<p>I love using good code &amp; pretty design to build awesome stuff for people!</p>
			<p>I am available for hire!</p>
			<a href="contact" class="btn btn-alt">Get in touch!</a>
			<a href="github.com/ethanchoi812"><i class="fa fa-github fa-2x fw"></i></a>
			<a href="linkedin.com/ethanchoi"><i class="fa fa-linkedin fa-2x fw"></i></a>
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
				<h3 class="read-more"><a href="iwebsg.com/portfolio">See More!</a></h3>
			</div>
		</section>
	</section>
<?php get_footer(); ?>