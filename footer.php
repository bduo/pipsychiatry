<?php

/*
File Name: footer.php
Programmer: Brandon El Haj
*/

?>

<!-- Clear it div to reset the layout for the 3-column bottom -->
<div class="clear"></div>
<footer role="contentinfo">
	<div class="container-fluid">
		<div class="row left_room">
			<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
			<!-- Hippa Notice favicon for Tracy's privacy policy. SVG file with a width of 155px. -->
			<a href="/pdfs/Tracy_Privacy_Policy.pdf" target="_blank"><img src="/assets/pip_Hippanotice.svg" alt="Portland Integrative Psychiatry Privacy Notice" class="favicon"></a>	
			<!-- Copyright info for desktop -->
			<p class="copyright_mobile">
				&#169;Portland Integrative Psychiatry, LLC 2018
			</p>	
			</div>
			<!-- Second column contains messenger apps and copyright info -->
			<div class="col-xs-0 col-sm-0 col-md-6 col-lg-6">
				<div id="container_foot">
					<!-- Spruce Messenger button. SVG file with dimensions 84px by 38px --> 
					<a href="https://app.sprucehealth.com/login" id="spruce_button" target="_blank"></a>
					<!-- Puts a gap between footer buttons. -->
					<div class="divider_foot"></div>
					<!-- Patient Portal button. SVG file with dimensions 84px by 38px -->
					<a href="https://pipsychiatry.md-hq.com/" id="portal_button" target="_blank"></a>
					<!-- Puts a gap between footer buttons. -->
					<div class="divider_foot"></div>
					<!-- Payments Portal button. SVG file with dimensions 84px by 38px -->
					<a href="https://pipsychiatry.md-hq.com/" id="pay_button" target="_blank"></a>
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
					14523 Westlake Drive, &#x23;4<br>
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

</body>

</html>
