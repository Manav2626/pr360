<?php include 'head.php'; ?>
<!--Main-->
<main class="vlt-main">
	<!--Page content-->
	<div class="vlt-page-content">
		<!--Page title-->
		<div class="vlt-page-title vlt-page-title--style-2 jarallax" style="position: relative; overflow: hidden; width: 100%;">
			<img class="jarallax-img" src="assets/img1/Websites-cover.png" alt="Responsive Image" loading="lazy"
				style="width: 100%; height: auto; object-fit: cover; max-width: 100%;">

			<style>
				@media (max-width: 768px) {
					.vlt-page-title.vlt-page-title--style-2.jarallax .jarallax-img {
						content: url('assets/img1/Websites-cover_small.png');
						/* Add your mobile image path here */
						width: 80%;
						height: auto;
						object-fit: contain;
						margin: 0 auto;
						display: block;
						justify-content: center;
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
							<span class="vlt-display-1 has-primary-color">Web Development</span>
						</div>

						<div class="vlt-gap-30"></div>
					</div>
					<div class="col-md-5 offset-md-1">
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
							<h2>Custom websites<br> that perform.</h2>
						</div>
						<div class="vlt-gap-40--sm"></div>
						<a href="contact.php" class="vlt-btn vlt-btn--secondary vlt-btn--lg mt-5">Contact Us</a>
					</div>
					<div class="col-md-6">
						<!--Animated block-->
						<div class="vlt-animated-block mt-3" data-aos="fade" data-aos-delay="100">
							<p class="fz-3">We provide customized web development solutions that prioritize sleek design, user-friendliness, and high performance, ensuring your website stands out and meets your business goals. Our services include:</p>
						</div>

						<div class="vlt-gap-50"></div>
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="300">
							<div class="has-black-color">
								<!--Styled list-->
								<ul class="vlt-styled-list vlt-styled-list--style-3">
									<li>Website design and development</li>
									<li>E-commerce solutions</li>
									<li>UX design</li>
									<li>Website maintenance and updates</li>
									<li>Performance optimization</li>
								</ul>
							</div>
						</div>
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
					<div class="vlt-stroke-text vlt-stroke-text--lg"><a href="ar_vr_marketing.php" target="_self">Next service</a>
					</div>
				</div>
			</div>
			<div class="vlt-gap-130"></div>
		</section>
	</div>
</main>
<?php include 'footer.php'; ?>