<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @package Pure Aesthetics
 */

get_header(); ?>

	<div class="semi-hero">
		<div class="site-wrap">
			<div class="mobile-site-wrap">
				<div class="vertical-align">
					<h1 class="extra">About us</h1>
					<h2 class="extra">Get to know Pure Aesthetics at its core.</h2>
				</div>
			</div>
		</div>
	</div>

	<section class="section section-about">
		<div class="site-wrap">
			<div class="different-site-wrap">
				<div class="about">
					<h5>About Pure Aesthetics</h5>
					<div class="logo-about"></div>
					<p class="about-text">Adina has had a passion for skin care since her teen years. Before moving to New York more 20 years ago, she worked as a licensed practical nurse in Israel and involved herself in the aesthetic industry. Upon arriving in the US, Adina trained to obtain her license from Atelier Esthetique of Aesthetics and is now a New York State licensed Clinical Aesthetician and New York State Certified Laser Specialist. As a Clinical Aesthetician, Adina worked at med spas in NYC, a top plastic surgeon in Queens, laser centers and spas on Long Island, all making her an expert in her field. Some clients even call her “the Queen of Skin”!

					<br /><br />
					Her specialties include skin analysis, customized facials, acne treatment and prevention, microdermabrasion skin peel, chemical peels, Mesotherapy, and Microcurrent “Lunchtime” face lift. She performs laser hair removal and electrolysis, specializes in facial threading and also does waxing services.

					<br /><br />
					Adina’s passion for skin care was evident at a young age. Before moving to New York, she worked as a licensed practical nurse (L.P.N.) in Israel and involved herself in the aesthetic industry. Upon arriving to the US, Adina trained to obtain her license from Atelier Esthetique of Aesthetics and is now a New York State licensed Clinical Aesthetician and a Certified Laser Specialist.</p>
				</div>
				<div class="our-vision">
					<h5>Our Vision</h5>
					<div class="vision">
						<div class="icon-vision"></div>
						<p class="vision-text">&nbsp; &nbsp; &nbsp; &nbsp; We believe that our clients deserve professional skin care solutions that use state –of-the-art technology, incorporated with top of the line products, to combat complex skin conditions without compromising on skin health.<br />Adina encourages clients to take an interest in their skin health, not only from an aesthetic point of view, but also as a long term investment in their health &amp; well being.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-details">
		<div class="site-wrap">
			<div class="testimonials">
				<div class="section-wrap">
					<h5>Client Testimonials</h5>
					<?php echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' limit='2' layout='grid' options='theme:none,info-position:info-left,text-alignment:left,columns:2,charlimit:164,charlimitextra:...,display-image:on,image-size:thumbnail,image-shape:circle,image-effect:none,image-size-override:98x98,richsnippets:true']"); ?>
				</div>
			</div>
			<div class="video">
				<div class="section-wrap">
					<h5>Company Video</h5>
					<div class="video-container">
						<div class="video-placeholder"><div class="play-button"></div></div>
						<iframe width="480" height="268" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-special-divider">
		<div class="site-wrap">
			<div class="special-text">
				<h6>Start saving on quality skin care with our <span>exclusive specials.</span></h6>
			</div>
			<div class="special-button">
				<a href="specials">
					<div class="button-large button">
						<p>View Specials</p>
					</div>
				</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
