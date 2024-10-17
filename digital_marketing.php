<?php include 'head.php'; ?>
<!--Main-->
<main class="vlt-main">
	<!--Page content-->
	<div class="vlt-page-content">
		<!--Page title-->
		<div class="vlt-page-title vlt-page-title--style-2 jarallax" style="position: relative; overflow: hidden; width: 100%;">
			<img class="jarallax-img" src="assets/img1/Marketing-cover.png" alt="Responsive Image" loading="lazy"
				style="width: 100%; height: auto; object-fit: cover; max-width: 100%;">

			<style>
				@media (max-width: 768px) {
					.vlt-page-title.vlt-page-title--style-2.jarallax .jarallax-img {
						content: url('assets/img1/Digitalmarketing_card.png');
						/* Add your mobile image path here */
						width: 80%;
						height: auto;
						object-fit: contain;
						margin: 0 auto;
						display: block;
					}

					/* Additional spacing for mobile view */
					.mt-5 {
						margin-top: 1rem;
						/* Adjust the value as needed */
					}

					/* Center the button for mobile view */
					.mt-5 {
						display: block;
						/* Make it a block element */
						margin: 2rem auto;
						/* Center horizontally and add vertical spacing */
						text-align: center;
						/* Center the text within the button */
					}
				}
			</style>
		</div>

		<div id="content"></div>
		<!--Section-->
		<section>
			<div class="vlt-gap-100" style="height: 100px;"></div>

			<style>
				@media (max-width: 768px) {
					.vlt-gap-100 {
						display: none;
					}

					/* Adding top margin for mobile view on the specified paragraph */
					.mobile-margin-top {
						margin-top: 1.5rem;
						/* Adjust the value as needed */
					}
				}
			</style>

			<div class="container">
				<div class="row">
					<div class="col-md-11 offset-md-1">
						<!--Animated block-->
						<style>
							/* Styles for mobile view */
							@media (max-width: 768px) {
								.vlt-page-content .vlt-animated-block[data-aos="fade"][data-aos-delay="0"] {
									margin-top: 20px;
									/* Adjust the value as needed */
								}
							}
						</style>

						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
							<span class="vlt-display-1 has-primary-color">Digital Marketing</span>
						</div>

						<div class="vlt-gap-30"></div>
					</div>
					<div class="col-md-5 offset-md-1">
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
							<h2>Elevate Your <br> Online Presence</h2>
						</div>
						<div class="vlt-gap-40--sm"></div>
						<a href="contact.php" class="vlt-btn vlt-btn--secondary vlt-btn--lg mt-5">Contact Us</a>
						<div class="vlt-gap-40"></div>

						<!-- Styled lists -->
						<ul class="vlt-styled-list vlt-styled-list--style-3">
							<p class="fz-3">SEO</p>
							<li>On-page</li>
							<li>Off-page</li>
							<li>Technical</li>
							<li>Local</li>
							<li>Audits</li>
						</ul>

						<ul class="vlt-styled-list vlt-styled-list--style-3 mt-3">
							<p class="fz-3">Social Media Management</p>
							<li>Strategy</li>
							<li>Content</li>
							<li>Community Management</li>
							<li>Paid Ads</li>
						</ul>

						<ul class="vlt-styled-list vlt-styled-list--style-3 mt-3">
							<p class="fz-3">Content Creation</p>
							<li>Video</li>
							<li>Graphics</li>
							<li>Copywriting</li>
							<li>Blogs</li>
							<li>Branding</li>
						</ul>
					</div>
					<div class="col-md-6">
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
							<p class="fz-3 mobile-margin-top">Our comprehensive digital strategies are meticulously crafted to enhance your brand’s online visibility, foster meaningful engagement, and drive conversions. We leverage a multi-faceted approach that includes:</p>
						</div>



						<!--Animated block-->
						<div class="vlt-animated-block custom-animated-block" data-aos="fade" data-aos-delay="300">
							<div class="has-black-color">
								<!--Styled list-->
								<ul class="vlt-styled-list vlt-styled-list--style-3">
									<p class="fz-3">Paid Advertising</p>
									<li>Google Ads</li>
									<li>Social Media Ads</li>
									<li>Retargeting</li>
								</ul>

								<ul class="vlt-styled-list vlt-styled-list--style-3 mt-3">
									<p class="fz-3">Email Marketing</p>
									<li>Drip campaigns</li>
									<li>Newsletters</li>
									<li>Lead Nurturing</li>
								</ul>

								<ul class="vlt-styled-list vlt-styled-list--style-3 mt-3">
									<p class="fz-3">Influencer Marketing</p>
									<li>Strategy</li>
									<li>Partnerships</li>
									<li>Campaigns</li>
								</ul>

								<ul class="vlt-styled-list vlt-styled-list--style-3 mt-3">
									<p class="fz-3">NFC Card Solutions</p>
									<li>Custom digital networking with NFC business cards</li>
								</ul>
							</div>
						</div>
						<style>
							/* Default styles for desktop */
							.custom-animated-block {
								margin-top: 142px;
								/* Space above in desktop view */
							}

							/* Styles for mobile view */
							@media (max-width: 768px) {
								.custom-animated-block {
									margin-top: 50px;
									/* Space above in mobile view */
								}
							}
						</style>



					</div>
				</div>
			</div>
		</section>
		<!--Page navigation-->
		<section class="vlt-page-navigation vlt-page-navigation--style-1 has-black-color">
			<div class="vlt-gap-130"></div>
			<div class="container">
				<div class="text-center">
					<!--Stroke text-->
					<div class="vlt-stroke-text vlt-stroke-text--lg"><a href="web_development.php" target="_self">Next service</a></div>
				</div>
			</div>
			<div class="vlt-gap-130"></div>
		</section>
	</div>
</main>
<?php include 'footer.php'; ?>