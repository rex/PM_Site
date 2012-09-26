<?php 

$title = "Home";
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
			Good Code Is
		</p>

	</div>

</div>

<div class="row">
	<div class="twelve columns">
		<div id="code_is">

			<div>
				<h1>Beautiful.</h1>
				<p>When you write beautiful code, people look at it and get jealous. Also it makes you just look good. Ya dig?</p>
			</div>
			<div>
				<h1>Simple.</h1>
				<p>Simple is as simple does. The easier it is for people to understand, the happier everybody is.</p>
			</div>
			<div>
				<h1>Efficient.</h1>
				<p>Efficiency is not a coding style. It is a lifestyle. DRY and modularize, man. Objects are your friend.</p>
			</div>
			<div>
				<h1>Effective.</h1>
				<p>Effective code gets the job done on time and under budget, reducing long-term maintenance.</p>
			</div>
			<div>
				<h1>Inspiring.</h1>
				<p>Have you ever looked at a well-written code class and felt energized? That's what inspiring code does.</p>
			</div>

		</div>
	</div>
</div>
<?php include( 'includes/footer.inc.php' ); ?>