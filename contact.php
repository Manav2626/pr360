<?php include 'head.php'; ?>
<main class="vlt-main">
	<!--Page content-->
	<div class="vlt-page-content">
		<!--Page title-->
		<div class="vlt-page-title vlt-page-title--style-3 jarallax"><img class="jarallax-img" src="assets/img1/contact_hero.jpg" alt="" loading="lazy">
			<div class="vlt-page-title__overlay"></div><a class="vlt-page-title__scroll-to vlt-scroll-to" href="#content"><i class="icon-arrow-down"></i></a>
			<div class="container">
				<h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)" data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Contact
				</h1>
			</div>
		</div>
		<div id="content"></div>
		<!--Section-->
		<section>
			<div class="vlt-gap-120"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
							<h2>Get in Touch</h2>
						</div>
						<div class="vlt-gap-60"></div>
					</div>
					<div class="col-lg-8">
						<!--Animated block-->
						<div class="vlt-animated-block" data-aos="fade" data-aos-delay="100">
							<!--Contact form-->
							<form class="vlt-contact-form--style-2" action="https://api.web3forms.com/submit" method="POST">
								<!-- Replace with your Access Key -->
								<input type="hidden" name="access_key" value="d8a116b6-7ee8-40c2-88fb-2cbf7a27508a">

								<!-- Honeypot Spam Protection -->
								<input type="checkbox" name="botcheck" class="hidden" style="display: none;">

								<!-- Form Inputs -->
								<div class="vlt-form-row two-col">
									<div class="vlt-form-group">
										<input class="vlt-form-control" type="text" name="name" required="required" placeholder=" ">
										<label class="vlt-form-label">Your name*</label>
									</div>
									<div class="vlt-form-group">
										<input class="vlt-form-control" type="email" name="email" required="required" placeholder=" ">
										<label class="vlt-form-label">Email address*</label>
									</div>
								</div>
								<div class="vlt-form-row two-col">
									<div class="vlt-form-group">
									<input class="vlt-form-control" type="tel" name="phone" placeholder=" " pattern="\d{10}" maxlength="10" inputmode="numeric" required>
									<label class="vlt-form-label">Phone number</label>
									</div>
									<div class="vlt-form-group">
										<input class="vlt-form-control" type="text" name="company" placeholder=" ">
										<label class="vlt-form-label">Company</label>
									</div>
								</div>
								
								<div class="vlt-form-group">
									<textarea class="vlt-form-control" name="message" rows="5" placeholder=" "></textarea>
									<label class="vlt-form-label">Message*</label>
								</div>
								
								<input type="hidden" name="redirect" value="https://pr36o.com/contact.php"> 


								<div class="vlt-gap-40"></div>
								<!-- Button -->
								<button class="vlt-btn vlt-btn--secondary vlt-btn--lg" type="submit">Submit</button>
							</form>



						</div>
						<div class="vlt-gap-60--md"></div>
					</div>
					<div class="col-lg-4">
						<div class="vlt-pl-70 vlt-pl-0--md">
							<div class="row">
								<div class="col-lg-12 col-md-6">
									<!--Animated block-->
									<div class="vlt-animated-block" data-aos="fade" data-aos-delay="200">
										<h5>General Info</h5>
										<div class="vlt-gap-20"></div>
										<p class="lh-2">B-303, Om Decora 9 Square 150 Feet Ring Rd, Circle, Nana Mava, Rajkot, Gujarat 360003<br>858-923-5899 <br>info@pr36o.com</p>
									</div>
									<div class="vlt-gap-60"></div>
								</div>
								<div class="col-lg-12 col-md-6">

									<!--Animated block-->
									<div class="vlt-animated-block" data-aos="fade" data-aos-delay="400">
										<div class="has-black-color"><a class="vlt-social-icon vlt-social-icon--style-1" href="#">Fb.</a><a class="vlt-social-icon vlt-social-icon--style-1" href="#">Tw.</a><a class="vlt-social-icon vlt-social-icon--style-1" href="#">In.</a><a class="vlt-social-icon vlt-social-icon--style-1" href="#">Ln.</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-gap-120"></div>
			<div class="container position-relative">
				<!--Particle image--><img class="vlt-particle" src="assets/img/root/square-plus-pattern.png" data-animation-name="fadeInUp" alt="" style="position: absolute; top: -140px; right: -120px; max-width: 232px; --animate-delay: .5s;" loading="lazy">
				<!--Animated block-->
				<div class="vlt-animated-block" data-aos="fade" data-aos-delay="0">
					<!--Google map-->
					<div id="map" style="height: 550px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.0071169886955!2d70.77807607442422!3d22.277720243715176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca38980b609f%3A0xbe6ddbdac5bdfa27!2sOm%20Decora%209%20Square!5e0!3m2!1sen!2sin!4v1723122758962!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			<div class="vlt-gap-120"></div>
		</section>
	</div>
</main>

<script>
document.querySelector('form').addEventListener('submit', function(event) {
    var phoneInput = document.querySelector('input[name="phone"]');
    var phoneValue = phoneInput.value;
    
    // Remove non-numeric characters
    phoneValue = phoneValue.replace(/\D/g, '');
    
    // Check if the phone number is exactly 10 digits
    if (phoneValue.length !== 10) {
        alert('Please enter a valid 10-digit phone number.');
        event.preventDefault(); // Prevent form submission
        return false;
    }
});
</script>

<?php include 'footer.php'; ?>