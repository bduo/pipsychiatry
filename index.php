<?php

/*
File Name: index.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Intro Section -->
	<section id="intro">
		<!-- Hiking photo and large logo for hero image. PNG file with dimensions of 1024px x 544px. -->
		<img src="/assets/heroimage.png" alt="Hiking photo with pipscychiatry Logo" class="hero">
		<!-- Div used for centering the h1 and p content. -->
		<div class="center_text">
			<!-- Left aligns the h1 and p content. -->
			<div class="left_text">
				<!-- Our Philosophy Header -->
				<h1 class="header_mobile">OUR PHILOSOPHY</h1>
				<!-- Our Philosophy paragraph -->
				<p class="intro_mobile">
					Tracy specializes in the functional treatment of ADHD and co-occuring<br class="breaks">
					disorders. This is different than traditional psychiatry in that she does not<br class="breaks">
					limit herself to prescribing only medications. She firmly believes that<br class="breaks">
					health is a combination of biological, psychological and social factors and<br class="breaks">
					that it's best addressed with a variety of interventions that include much<br class="breaks">
					more than prescribed medications. She encourages a team approach with<br class="breaks">
					her clients, creating individualized, patient-centered, science-based treatment<br class="breaks"> 
					plans to address the underlying causes of psychiatric disorders. Her goal in<br class="breaks">
					functional psychiatry is to address the root causes of illness, as opposed<br class="breaks">
					to just the symptoms. She also emphasizes the importance of client<br class="breaks">
					education and empowerment. 	
				</p>
			</div>
		</div>
		<!-- Container holding Services and Contact button -->
		<div id="container_intro">
			<!-- Services button SVG file with dimensions 101px by 34px -->
			<a href="https://www.pipsychiatry.com/services.php" id="services_button"></a>
			<!-- Puts space between call to action buttons -->
			<div class="divider_call"></div>
			<!-- Contact button SVG file with dimensions 101px by 34px -->
			<a href="https://www.pipsychiatry.com/contact.php" id="contact_button"></a>
		</div>
	</section>
</main>

<?php include 'footer.php'; ?>