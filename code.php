<?php 

$title = "Code";
include( 'includes/header.inc.php' ); ?>

<script>
$(window).load( function() {
	$("#slider").orbit({
		bullets: 	true,
		fluid: 		'16x6',
		captions: 	true,
		captionAnimation: 		'fade',
		captionAnimationSpeed: 	800
	});

	$(".expandable").click( function() {
		$(".expandable div").slideUp('fast');
		$(this).addClass('down').
	});
});
</script>

<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;">
			I write lots and lots of code.
		</p>

		<div class="expandable">
			<div class="row">
				<div class="ten columns">
					<h1>Basic Reddit Reader in PHP</h1>
				</div>
				<div class="two columns">
					<a href="#" class="btn small toggle_exp">	
						Show
					</a>	 
				</div>
			</div>

			<div>
				<script src="https://gist.github.com/3105963.js?file=redditReaderBasic.php"></script>
			</div>
		</div>
		<div class="expandable">
			<div>
				<script src="https://gist.github.com/3107841.js?file=arrayToObject.php"></script>
			</div>
		</div>
		<div class="expandable">
			<div>
				<script src="https://gist.github.com/2292935.js?file=gistfile1.aw"></script>
			</div>
		</div>
		<div class="expandable">
			<div>
				<script src="https://gist.github.com/2253239.js?file=gistfile1.aw"></script>
			</div>
		</div>
		<div class="expandable">
			<div>
				<script src="https://gist.github.com/1969584.js?file=placefooter.jquery.js"></script>
			</div>
		</div>
	</div>

</div>

<?php include( 'includes/footer.inc.php' ); ?>