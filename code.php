<?php 

$title = "Code";
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
			The code monkeys are furiously typing.
		</p>

	</div>

</div>

<?php include( 'includes/footer.inc.php' ); ?>