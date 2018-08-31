<?php

/*
File Name: contact.php
Programmer: Brandon El Haj
*/

?>

<?php include 'header.php'; ?>

<main>
	<!-- Contact Section -->
	<section id="contact">
		<!-- Two column layout for Contact page -->
		<div class="section_group">
			<!-- First column has Contact paragraph and form -->
			<div class="col span_6_of_12">
				<!-- Centers H1 and Contact paragraph -->
				<div class="center_text">	
					<div class="contact">
						<!-- Contact header -->
						<h1 class="small_phone_header">CONTACT</h1>
						<p class="bottom_space small_phone_p">
							Tracy is a solo practitioner and likes to<br> 
							keep her caseload small in order to give<br> 
							clients the quality care they deserve.<br> 
							Shari Firth, administrative professional,<br> 
							does all of Tracy's scheduling and <br> 
							administrative work. If you think the<br> 
							team will be a good fit for you, send a<br> 
							message with your full name, date of<br> 
							birth, and email so Shari can send you<br> 
							the new client information. She will<br> 
							try to get back to you within one week. 	
						</p>
						<!-- Contact form that processes to Tracys email -->
						<form method="post" action="contact_process.php">
							<label for="name">Full Name</label><br>
							<input type="text" name="name" id="name" class="name" required><br>
							<label for="date">Date of Birth</label><br>
							<input type="date" name="date" id="date" class="date" placeholder="mm/dd/yyyy" required><br>
							<label for="email">Email</label><br>
							<input type="email" name="email" id="email" class="email" required><br>
							<label for="message">Message</label><br>
							<textarea name="message" id="message"></textarea><br>
							<input type="submit" value="" name="submit" id="submit">
						</form>	
					</div>
				</div>	
			</div>
			<!-- Second column contains flower photo which disappears in mobile and smaller tablet versions. -->
			<div class="col span_6_of_12">
				<img src="/assets/pip_flowers.png" alt="Picture of yellow flowers in a field." class="flowers">	
			</div>	
		</div>	
	</section>
</main>

<?php include 'footer.php'; ?>