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
			<h1 class="slides">
				<div class="slide first">
					<div class="site-wrap"><p class="banner-text">A youthful, attractive complexion</p><p class="banner-text second">can be yours at any age!</p></div>
				</div>
				<div class="slide second">
					<div class="site-wrap"><p class="banner-text">Discover your true beauty with our</p><p class="banner-text second"> pure, luxurious facials</p></div>
				</div>
				<div class="slide third">
					<div class="site-wrap"><p class="banner-text">Eliminate unwanted hair with pain-free</p><p class="banner-text second">leading-edge laser hair technology and be hair free!</p></div>
				</div>
			</h1>
		</div>
	</header>

	<section class="section section-services">
		<h2>Professional Services</h2>
		<h4>Enjoy a variety of services that will help you maintain your youthful look and keep it at peak levels.</h4>
		<div class="service-list site-wrap">
			<div class="service-container">
				<div class="benefit facial">
					<a href="facial-services"><span class="service-photo"></span></a>
					<h3><a href="facial-services">Facial Services</a></h3>
					<p class="service-short-desc">Get the skin you truly deserve by our luxurious but still affordable facial treatments.</p>
				</div>
				<div class="benefit laser-hair">
					<a href="laser-hair-removal"><span class="service-photo"></span></a>
					<h3><a href="laser-hair-removal">Laser Hair Removal</a></h3>
					<p class="service-short-desc">Eliminate tedious and routinal shaving and waxing with the newest technology. </p>
				</div>
				<div class="benefit skin-tightening">
					<a href="skin-tightening"><span class="service-photo"></span></a>
					<h3><a href="skin-tightening">Skin Tightning</a></h3>
					<p class="service-short-desc">Good things come in small packages – get firmer, more youthful looking skin.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-details">
		<div class="site-wrap">
			<div class="testimonials">
				<div class="section-wrap">
					<h5>Client Testimonials</h5>
					<?php //echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' limit='2' layout='grid' options='theme:none,info-position:info-left,text-alignment:left,columns:2,charlimit:164,charlimitextra:...,display-image:on,image-size:thumbnail,image-shape:circle,image-effect:none,image-size-override:98x98,richsnippets:true']"); ?>
					<div id="ttshowcase_0">
						<div class="ttshowcase_wrap tt_theme_none">
							<div itemscope="" itemtype="http://schema.org/Product">
								<meta itemprop="name" content="Pure Aesthetics">
								<div class="ttshowcase_rl_box tt_2cl tt_text_left ">
									<div itemprop="review" itemscope="" itemtype="http://schema.org/Review">
										<div class="ttshowcase_rl_breed">
											<div class="ttshowcase_rl_info_wrap tt_info-left tt_text_center">
												<div class="icon-quote"></div>
												<div class="ttshowcase_rl_image tt_img_circle tt_img_none"><img src="http://pureaesthetics.com:8888/wp-content/uploads/2014/12/profile-pic-b.jpg" alt="Lara Smith" width="98" height="98"></div>
												<div class="ttshowcase_rl_aditional_info ">
													<meta itemprop="datePublished" content="December 2, 2014">
												</div>
											</div>
											<div class="tt_quote_info-left ttshowcase_rl_quote_sided summary">
												<div class="ttshowcase_rl_quote">
													<p>Keeping my skin rejuvinated and healthy is the most important thing in the world for me. After having such a hard time looking for a perfect skin care salon....</p>
												</div>
												<div class="ttshowcase_rl_subtitle"><span class="ttshowcase_rl_title reviewer">— <span itemprop="author">Lara Smith</span>, </span>Director, Maili Skincare</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ttshowcase_rl_box tt_2cl tt_text_left ">
									<div itemprop="review" itemscope="" itemtype="http://schema.org/Review">
										<div class="ttshowcase_rl_breed">
											<div class="ttshowcase_rl_info_wrap tt_info-left tt_text_center">
												<div class="icon-quote"></div>
												<div class="ttshowcase_rl_image tt_img_circle tt_img_none"><img src="http://pureaesthetics.com:8888/wp-content/uploads/2014/12/profile-pic-a.jpg" alt="Jane Laura" width="98" height="98"></div>
												<div class="ttshowcase_rl_aditional_info ">
													<meta itemprop="datePublished" content="December 2, 2014">
												</div>
											</div>
											<div class="tt_quote_info-left ttshowcase_rl_quote_sided summary">
												<div class="ttshowcase_rl_quote">
													<p>Keeping my skin rejuvinated and healthy is the most important thing in the world for me. After having such a hard time looking for a perfect skin care salon....</p>
												</div>
												<div class="ttshowcase_rl_subtitle"><span class="ttshowcase_rl_title reviewer">— <span itemprop="author">Jane Laura</span>, </span>CEO, Hava Zingboim</div>
											</div>
										</div>
									</div>
								</div>
								<div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
									<meta itemprop="ratingValue" content="0">
									<meta itemprop="reviewCount" content="2">
								</div>
							</div>
						</div>
					</div>

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
