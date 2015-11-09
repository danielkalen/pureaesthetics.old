<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pure Aesthetics
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer section-footer section" role="contentinfo">
		<div class="footer-wrap">
			<div class="second-wrap">

				<div class="footer-section site-map">
					<div class="section-wrap">
						<p class="footer-title">Site map</p>
						<ul class="first">
							<li class="first"><a href="home">Home</a></li>
							<li><a href="skin-tightening">Services</a></li>
							<li class="subpage"><a href="skin-tightening">Skin Tightening</a></li>
							<li class="subpage"><a href="laser-hair-removal">Laser Hair Removal</a></li>
							<li class="subpage last"><a href="facial-services">Facial Services</a></li>
						</ul>
						<ul>
							<li class="first"><a href="about">About Us</a></li>
							<li><a href="contact">Contact Us</a></li>
							<li><a href="specials">Specials</a></li>
							<li class="last"><a href="terms">Terms &amp; Conditions</a></li>
							<li class="last"><a href="privacy-policy">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="section-wrap satisfaction">

						<div class="icon-stamp"></div>

						<div class="satisfaction-text">
							<p class="percent">100%</p>
							<p class="message">Satisfaction Guaranteed</p>
						</div>

					</div>
				</div>
				<div class="footer-section contact-us">
					<div class="section-wrap">
						<p class="footer-title">Contact us</p>
						<div class="contact first">
							<div class="icon-f-phone"></div>
							<div class="detail">(718) 717-9806</div>
						</div>
						<div class="contact second">
							<div class="icon-f-email"></div>
							<div class="detail">info@pureaesthetics.com</div>
						</div>
						<div class="contact last">
							<div class="icon-f-address"></div>
							<div class="detail">499 Chestnut St STE 110 Cedarhurst NY 11516</div>
						</div>
					</div>
					<div class="section-wrap social-us">
						<p class="footer-title">We are social</p>
						<div class="social-network first">
							<div class="icon-facebook"></div>
							<div class="network"><a href="//facebook.com/pureaesthetics.net">Facebook</a></div>
						</div>
						<div class="social-network second">
							<div class="icon-twitter"></div>
							<div class="network"><a href="//twitter.com/pureaesthetics.net">Twitter</a></div>
						</div>
						<div class="social-network last">
							<div class="icon-pinterest"></div>
							<div class="network"><a href="//pinterest.com/pureaesthetics.net">Pinterest</a></div>
						</div>
					</div>
				</div>
				<div class="footer-section message-us">
					<div class="section-wrap">
						<p class="footer-title">Message us</p>
						<?php echo do_shortcode('[contact-form-7 id="9" title="Contact form 1"]'); ?>
					</div>
				</div>

			</div>
		</div><!-- .footer-wrap -->

		<div class="copyright"><p>2014 Copyright Pure Aesthetics All Rights Reserved | <a href="terms">Terms &amp; Conditions</a></p></div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57419484-1', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
