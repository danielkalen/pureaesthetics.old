<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @package Pure Aesthetics
 */

get_header(); ?>

	<header>
		<div class="section-hero section">
			<div class="slides">
				<div class="slide first">
					<div class="site-wrap"><h1 class="banner-text">A Youthful, Attractive Complexion</h1><h1 class="banner-text second">Can Be Yours At Any Age!</h1></div>
				</div>
				<div class="slide second">
					<div class="site-wrap"><h1 class="banner-text">Get The Uppermost Professional Care</h1><h1 class="banner-text second">That you always deserved!</h1></div>
				</div>
				<div class="slide third">
					<div class="site-wrap"><h1 class="banner-text">Discover Your True Beauty With</h1><h1 class="banner-text second">Our Hair Removal Services</h1></div>
				</div>
			</div>
		</div>
	</header>

	<section class="section section-services">
		<h2>Professional Services</h2>
		<h4>Enjoy a variety of services that will help you maintain your youthful look and keep it at peak levels.</h4>
		<div class="service-list site-wrap">
			<div class="service-container">
				<div class="benefit skin-tightening">
					<a href="skin-tightening"><span class="service-photo"></span></a>
					<h3><a href="skin-tightening">Skin Tightning</a></h3>
					<p class="service-short-desc">Reveal your true inner self by receiving our proven skin tightning treatments.</p>
				</div>
				<div class="benefit laser-hair">
					<a href="laser-hair-removal"><span class="service-photo"></span></a>
					<h3><a href="laser-hair-removal">Laser Hair Removal</a></h3>
					<p class="service-short-desc">Eliminate tedious and routinal hair problems once and for all with our advanced tech.</p>
				</div>
				<div class="benefit facial">
					<a href="facial-services"><span class="service-photo"></span></a>
					<h3><a href="facial-services">Facial Services</a></h3>
					<p class="service-short-desc">Get the skin you truly deserve by our luxirious but still affordable facial treatments.</p>
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
