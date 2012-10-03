<?php

$url = "http://localhost/PM_Site";
$page = strtolower( str_replace( "/PM_Site/" , "" , $_SERVER['REQUEST_URI'] ) );

?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?=$title;?> :: Pierce Moore</title>

	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<!-- <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Oxygen+Mono|Source+Sans+Pro:900|Open+Sans+Condensed:300|Josefin+Slab:300,700' rel='stylesheet' type='text/css'>

	<!-- Included JS Files (Compressed) -->
	<link rel="stylesheet/less" href="assets/less/styles.less" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="assets/js/unified.js"></script>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script>
function track( category , item , meta ) {
	_gaq.push([ '_trackevent', category , item , meta ]);
}
</script>
</head>
<body>

<!-- <a href="<?=$url;?>/resume" id="hire_me">
	<h1>Hire Me!</h1>
</a> -->
<div class="row">
	<div class="five columns">
		<a class="logo" id="logo" href="<?=$url;?>">PIERCE MOORE</a>
		<p style="font-family: 'Open Sans Condensed';font-size: 1.4em;letter-spacing: -1px;">Great code, great food, great music, great company.</p>
	</div>

	<div class="seven columns">
		<ul class="nav-bar">
			<li class="<?=($page=='code') ? 'active' : null ;?>"><a href="<?=$url;?>/code">Code</a></li>
			<li class="<?=($page=='music') ? 'active' : null ;?>"><a href="<?=$url;?>/music">Music</a></li>
			<li class="<?=($page=='portfolio') ? 'active' : null ;?>"><a href="<?=$url;?>/portfolio">Portfolio</a></li>
			<li class="<?=($page=='showcase') ? 'active' : null ;?>"><a href="<?=$url;?>/showcase">Showcase</a></li>
			
			<?php if( $page == 'resume' ): ?>
				<li class="active">
					<a href="<?=$url;?>/resume">Resume</a>
				</li>
			<?php else: ?>
				<li class="has-flyout">
					<a href="<?=$url;?>/resume">Resume</a>
					<!-- <a href="#" class="flyout-toggle"><span> </span></a> -->
					<ul class="flyout">
						<li><a href="<?=$url;?>/resume#objective">Objective</a></li>
						<li><a href="<?=$url;?>/resume#experience">Experience</a></li>
						<li><a href="<?=$url;?>/resume#certs">Certifications</a></li>
						<li><a href="<?=$url;?>/portfolio">Portfolio</a></li>
						<li><a href="<?=$url;?>/resume#skills">Training / Skills</a></li>
						<li><a href="<?=$url;?>/resume#references">References</a></li>
					</ul>
				</li>
			<?php endif; ?>
			<li class="down"><a href="#" style="font-family: Open Sans;font-weight: 700;font-size: 1.5em;letter-spacing: -2px;">Hire Me!</a></li>
		</ul>
	</div>

</div>
