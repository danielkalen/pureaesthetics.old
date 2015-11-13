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
					<h1 class="extra">Contact us</h1>
					<h2 class="extra">Have any questions? We’re here to help you get the satisfaction you deserve.</h2>
				</div>
			</div>
		</div>
	</div>

	<section class="section section-map">
		<div class="site-wrap">
			<div class="mobile-site-wrap">
				<h5>Where You Can Find us</h5>
				<script src="https://maps.googleapis.com/maps/api/js"></script>
			    <script>
			      function initialize() {
			        var mapCanvas = document.getElementById('map-canvas');
			        var mapOptions = {
			          center: new google.maps.LatLng(40.6228784, -73.7270212),
			          zoom: 18,
			          mapTypeId: google.maps.MapTypeId.ROADMAP
			        }
			        var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker=new google.maps.Marker({
					  position:new google.maps.LatLng(40.6228784, -73.7270212),
					  });

					marker.setMap(map);

					var infowindow = new google.maps.InfoWindow({
					  content:"<strong>Pure Aesthetics</strong><br />499 Chestnut Street Suite #110<br />Cederhurst NY 11516<br />(718) 717-9806"
					  });

					google.maps.event.addListener(marker, 'click', function() {
					  infowindow.open(map,marker);
					  });
			      }
			      google.maps.event.addDomListener(window, 'load', initialize);
			    </script>
				<div class="map"><div id="map-canvas"></div></div>
				<div class="contact-list">
					<div class="contact-item first">
						<div class="contact-icon icon-phone"></div>
						<div class="contact-details">
							<p class="contact-title">Phone</p>
							<p class="contact-text">(718) 717-9806</p>
						</div>
					</div>
					<div class="contact-item second">
						<div class="contact-icon icon-email"></div>
						<div class="contact-details">
							<p class="contact-title">Email</p>
							<p class="contact-text">Info@pureaesthetics.net</p>
						</div>
					</div>
					<div class="contact-item third">
						<div class="contact-icon icon-address"></div>
						<div class="contact-details">
							<p class="contact-title">Address</p>
							<p class="contact-text">499 Chestnut Street Suite #110,<br />Cederhurst NY 11516</p>
						</div>
					</div>
					<div class="contact-item fourth">
						<div class="contact-icon icon-clock"></div>
						<div class="contact-details">
							<p class="contact-title">Business Hours</p>
							<p class="contact-text">By appointment only<br /><span>Night Hours Available</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-contact-form">
		<div class="site-wrap">
			<div class="different-site-wrap">
				<h5>Send us a message</h5>
				<div class="form"><?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1_copy"]') ?></div>
				<div class="fact">
					<div class="icon-bulb"></div>
					<p class="fact-title">Did you know?</p>
					<p class="fact-text">By January 2014, Pure Aesthetics has successfully treated more than 1500 satisfied clients. Treatments vary from exquisite facial treatments to advanced laser hair skin removal treatments.</p>
				</div>
			</div>
		</div>	
	</section>

	<section class="section section-policy">
		<div class="site-wrap">
					<div class="policy">
						<div class="policy-wrap">
							<div class="round-rect">
								<div class="policy-icon icon-cancel"></div>
							</div>
							<p class="policy-title">Cancellation <span>Policy</span></p>
							<p class="policy-desc">We understand that anticipated events happen occasionally in everyone’s life. In our desire to be effective and fair to all clients, the following policies are honored: 24 hour advance notice is required when cancelling an appointment. This allows the opportunity for someone else to schedule an appointment.</p>
						</div>
					</div>
					<div class="policy">
						<div class="policy-wrap">
							<div class="round-rect">
								<div class="policy-icon icon-late"></div>
							</div>
							<p class="policy-title">Late Arrival <span>Policy</span></p>
							<p class="policy-desc">If you arrive late, your session may be shortened in order to accommodate others whose appointments follow yours. Depending upon how late you arrive, Adina will then determine if there is enough time remaining to start a treatment. Regardless of the length of the treatment actually given, you will be responsible for the full session. Out of respect and considerations to your therapist and other customers, please plan accordingly and be on time.</p>
						</div>
					</div>
		</div>
	</section>
<!-- </div> -->

<?php get_footer(); ?>