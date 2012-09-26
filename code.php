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

	/*
	$(".toggle_exp").toggle( function() {
		$(".expandable .exp_child").slideUp('fast');
		$(this).addClass('down').text("Hide Code");
		$(this).closest('.expandable').children('.exp_child').slideDown('fast');
	}, function() {
		$(".expandable .exp_child").slideUp('fast');
		$(this).removeClass('down').text("See Code");
		$(this).closest('.expandable').children('.exp_child').slideUp('fast');
	});
	*/
});
</script>

<div id="snippet_1" class="snippet reveal-modal large">
	<h1>Basic Reddit Reader in PHP</h1>
	<script src="https://gist.github.com/3105963.js?file=redditReaderBasic.php"></script>

	<a href="#" data-reveal-id="snippet_2" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>

<div id="snippet_2" class="snippet reveal-modal large">
	<h1>Recursively Convert a Multi-Dimentional PHP Array to an Object</h1>
	<script src="https://gist.github.com/3107841.js?file=arrayToObject.php"></script>

	<a href="#" data-reveal-id="snippet_1" class="large secondary button" style="float: left;">Last Snippet: PHP Reddit Reader</a>
	<a href="#" data-reveal-id="snippet_1" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>

<div id="snippet_3" class="snippet reveal-modal large">
	<h1>Basic Reddit Reader in PHP</h1>
	<script src="https://gist.github.com/3105963.js?file=redditReaderBasic.php"></script>

	<a href="#" data-reveal-id="snippet_2" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>

<div id="snippet_4" class="snippet reveal-modal large">
	<h1>Convert a PHP Array to a StdClass Object</h1>
	<script src="https://gist.github.com/3107841.js?file=arrayToObject.php"></script>

	<a href="#" data-reveal-id="snippet_1" class="large secondary button" style="float: left;">Last Snippet: PHP Reddit Reader</a>
	<a href="#" data-reveal-id="snippet_1" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>
<div id="snippet_5" class="snippet reveal-modal large">
	<h1>Basic Reddit Reader in PHP</h1>
	<script src="https://gist.github.com/3105963.js?file=redditReaderBasic.php"></script>

	<a href="#" data-reveal-id="snippet_2" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>

<div id="snippet_6" class="snippet reveal-modal large">
	<h1>Convert a PHP Array to a StdClass Object</h1>
	<script src="https://gist.github.com/3107841.js?file=arrayToObject.php"></script>

	<a href="#" data-reveal-id="snippet_1" class="large secondary button" style="float: left;">Last Snippet: PHP Reddit Reader</a>
	<a href="#" data-reveal-id="snippet_1" class="large button" style="float: right;">Next Snippet: Array to Object</a>
	<a class="close-reveal-modal">x</a>
</div>

<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;">
			I write lots and lots of code.
		</p>

		<a href="#" data-reveal-id="snippet_1" class="btn snippet">	
			Basic Reddit Reader in PHP
		</a>

		<a href="#" data-reveal-id="snippet_2" class="btn snippet">	
			Convert a PHP Array to an Object
		</a>

	</div>

</div>

<?php include( 'includes/footer.inc.php' ); ?>