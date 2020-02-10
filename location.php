<?php

/*
File Name: location.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Location section -->
	<section id="location">
		<!-- Our Location header -->
		<h1 class="location_header">OUR LOCATION</h1>
		<!-- Google Map with dimensions 600px by 600px -->
		<div id="contain">
			<iframe width="100%" height="550" frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/place?q=%0914523%20Westlake%20Drive%2C%20Suite%204%20Lake%20Oswego%2C%20OR%2097035&key=AIzaSyAG2mBuB2o3zPJelv6k0fBLR-s6yS6ey3U&zoom=13" allowfullscreen></iframe>
		</div>
		<div class="clear"></div>
		<!-- Row contains PIP logo and Tracys professional contact info -->
		<div class="row gap">
			<!-- First column has PIP logo -->
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<img src="/assets/location_logo.svg" alt="Portland Integrative Psychiatry Logo" id="sm_logo">
			</div>
			<!-- Second column has Tracys professional license info -->
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<!-- Tracys License and Contact info -->
				<article class="tracy_info">
					<!-- Regular font for contact info -->
					<p class="location_contact_reg">
						TRACY FILLEY, PMHNP-BC<br> PORTLAND INTEGRATIVE PSYCHIATRY<br>
					</p>
					<!-- Thick font for contact info -->
					<p class="location_contact_thick">
						14523 Westlake Drive, &#x23;4<br> Lake Oswego, OR 97035<br>
						<br>
						<!-- Portland Integrative Psychiatry phone and fax number. -->
						<span id="thin_phone">P</span> &#x7C; <a href="tel:+15037655856">503.765.5856</a><br>
						<span id="thin_fax">F</span> &#x7C; <a href="tel:+18889741009">888.974.1009</a>
					</p>
				</article>
			</div>
		</div>
	</section>
</main>

<?php include 'footer.php'; ?>
