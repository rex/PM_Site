<?php 

$title = "Portfolio";
include( 'includes/header.inc.php' ); ?>

<div class="row">
	<div class="twelve columns">
		<p class="huge_text" style="text-align:center;">
			A brief overview of some of my projects.
		</p>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="http://placekitten.com/350/200" alt="Placeholder" title="Placeholder" >
			<div class="port_caption"><p class="heading">cms</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<p class="heading">CMS Project</p>
		<p>Built a fully-featured CMS from scratch, complete with tiered user levels, messaging, notifications, and a javascript-based page building platform.</p>

		<a href="#" data-reveal-id="portfolio_cms" class="large button port_open_info">Screenshots / Info</a>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="http://placekitten.com/350/200" alt="Placeholder" title="Placeholder" >
			<div class="port_caption"><p class="heading">bantp</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<p class="heading">Bad Ass New Tab Page</p>
		<p>I wrote a browser extension for Google Chrome that makes the new tab page a functional, beautiful place to make browsing more pleasant.</p>

		<ul class="button-group rounded port_open_info">
			<li><a href="#" class="large success button radius">Chrome Web Store</a></li>
			<li><a href="#" data-reveal-id="portfolio_cms" class="large button radius">Screenshots / Info</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="http://placekitten.com/350/200" alt="Placeholder" title="Placeholder" >
			<div class="port_caption"><p class="heading">rubyphp</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<p class="heading">RubyPHP</p>
		<p>I wrote a really awesome PHP class that allows developers to harness the simplicity and syntax of Ruby in their codebase.</p>

		
		<ul class="button-group rounded port_open_info">
			<li><a href="#" class="large success button radius">View on GitHub</a></li>
			<li><a href="#" data-reveal-id="portfolio_cms" class="large button radius">Screenshots / Info</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="http://placekitten.com/350/200" alt="Placeholder" title="Placeholder" >
			<div class="port_caption"><p class="heading">tickomatic</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<p class="heading">TickoMatic</p>
		<p>I wrote a fun little application that provides users with a countdown timer and a serene image switching theme.</p>

		<a href="#" data-reveal-id="portfolio_cms" class="large button port_open_info">Screenshots / Info</a>
	</div>
</div>

<?php include( 'includes/footer.inc.php' ); ?>