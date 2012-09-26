<?php 

$title = "Resume";
include( 'includes/header.inc.php' ); ?>

<script>
$(window).load( function() {
	$("#code_is").orbit({
		bullets: 	true,
		fluid: 		'16x6',
		captions: 	true,
		captionAnimation: 		'fade',
		captionAnimationSpeed: 	800
	});
});
</script>

<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;">
			I swear I know what I'm doing. 
		</p>

	</div>

</div>


<?php include( 'includes/footer.inc.php' ); ?>