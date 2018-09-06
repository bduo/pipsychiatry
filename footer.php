<?php

/*
File Name: footer.php
Programmer: Brandon El Haj
*/

?>

<!-- Clear it div to reset the layout for the 3-column bottom -->
<div class="clear"></div>
<footer>
	<div class="container-fluid">
		<div class="row left_room">
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<!-- Youtube favicon. PNG file with dimensions 110px by 42px. -->
			<a href="https://www.youtube.com/"><img src="/assets/youtube_fav.svg" alt="Tracys Youtube Channel favicon" class="favicon"></a>	
			<!-- Copyright info for desktop -->
			<p class="copyright_mobile">
				&#169;Portland Integrative Psychiatry, LLC 2018
			</p>	
			</div>
			<!-- Second column contains messenger apps and copyright info -->
			<div class="col-xs-0 col-sm-0 col-md-6 col-lg-6">
				<div id="container_foot">
					<!-- Spruce Messenger button. PNG file with dimensions 84px by 38px --> 
					<a href="https://app.sprucehealth.com/login" id="spruce_button"></a>
					<!-- Puts a gap between footer buttons. -->
					<div class="divider_foot"></div>
					<!-- Valent Patient Portal button. PNG file with dimensions 84px by 38px -->
					<a href="https://www.valantmed.com/Portal/PortlandIntegrativePsychiatry" id="valant_button"></a>
					<!-- Puts a gap between footer buttons. -->
					<div class="divider_foot"></div>
					<!-- Payments Portal button. PNG file with dimensions 84px by 38px -->
					<a href="https://www.navicurepayments.com/pip/pay#!/" id="pay_button"></a>
				</div>
				<!-- Copyright info for desktop -->
				<p class="copyright">
				    &#169;Portland Integrative Psychiatry, LLC 2018
				</p>
			</div>
			<!-- Third column contains Tracys professional contact -->
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<!-- Tracys License and Contact info -->
				<p class="footer_contact">
					Tracy Filley, PMHNP-BC<br>
					Portland Integrative Psychiatry<br>
					14523 Westlake Drive, Suite 4<br>
					Lake Oswego, OR 97035<br>
					<br>
					<!-- Portland Integrative Psychiatry phone and fax number -->
					P &#x7C; <a href="tel:+15037655856">503.765.5856</a><br>
					F &#x7C; <a href="tel:+18889741009">888.974.1009</a>	
				</p>
			</div>
		</div>
	</div>	
</footer>

<!-- Jquery link -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Custom JS link -->
<script type="text/javascript" src="/scripts/pip.js"></script>

<!-- Google Map link -->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZmQwby43V5xkdwGVnzfAXFtQfk1HZblM&callback=initMap" type="text/javascript"></script>

</body>

</html>
