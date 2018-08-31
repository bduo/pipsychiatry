<?php
// isset function checks if the variable is set or has a value 
if (isset($_POST['submit'])) {
	// Declaring the variables 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$message = $_POST['message'];
	
	$from = 'Portland Integrative Psychiatry';
	$to = 'info@pipsych.com';
	$subject = 'New Patient Intake Form';
	
	// Fills the content of the email
	$body = "From: $name\n Email: $email\n DOB: $date\n Message:\n $message";
	
	// Checks that the user entered a name 
	if (!$_POST['name']) {
	$errorName = 'Enter your first and last name please';
	}
	
	// Checks if the user entered a valid email address
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errorEmail = 'Only valid email addresses please';	
	}
	
	// Function checks for errors, if there are none, it sends the form
	if (!$errorName && !$errorEmail) {
		if (mail ($to, $subject, $body, $from)) {
			$result='<div class="alert alert-success" role="alert">Thank you for contacting Portland Integrative Psychiatry.<br>We will contact you soon.</div>';
		}
	}
	else {
			$result='<div class="alert alert-danger" role="alert">Sorry your message was unsuccessful.<br>Please return to the Contact page to try again.</div>';
		}
}
?>

<?php include 'header.php'; ?>

<main>
	<!-- Landing Section -->
	<section id="landing">
		<!-- Envelope Icon for Contact Process page. PNG file with dimensions of 201px by 201px -->
		<img src="assets/pip_contactlanding.png" alt="Envelope icon for contact landing page" class="contact_icon">	
		
		<!-- Echo prints the result of the form being sent or not -->
		<?php echo $result; ?>
	
		<div id="container_process">
			<!-- Contact button PNG file with dimensions 101px by 34px -->
			<a href="https://www.pipsychiatry.com/contact.php" id="contact_process_button"></a>
			<!-- Puts space between call to action buttons -->
			<div class="divider_process"></div>
			<!-- Home button PNG file with dimensions 101px by 34px -->
			<a href="https://www.pipsychiatry.com" id="home_button"></a>
		</div>
	</section>	
</main>

<?php include 'footer.php'; ?>