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

<hr />


<!-- https://api.github.com/users/piercemoore/repos? -->
<script>
$(document).ready(function() {
	$("#github_show").click( function() {
		var btn_gh_fetch = $("#github_show");
		var progress = $("#github_progress");
		var gh_list =  $("#github_area");
		var gh_table = $("#github_repos_table");
		var p_repo = $("#processing_repo");
		var p_action = $("#processing_action");
		var p_progress = $("#processing_progress");
		var p_header = $("#processing_header");

		$(this).addClass("disabled").slideUp("fast");
		progress.slideDown("fast").removeClass("hidden");
		p_header.text("FETCHING...");
		p_progress.animate({width:"5%"}, 250 );
/*		
		$.getJSON("https://api.github.com/users/piercemoore/repos?", function( data ) {
			console.log( data );
		});
*/
	});

});
</script>
<div class="row">
	<div id="github_progress" class="twelve columns hidden">
		<div class="radius progress" style="width:100%;">
			<span class="meter" id="processing_progress" style="width: 0%;"><img src="<?=$images;?>/ajax-loader.gif" style="margin:1px 5px;float: right;" /></span>
		</div>
		<h2 class="f_general" id="processing_header">PROCESSING REPOSITORY:</h2>
		<p id="processing_repo" class="subheading"></p>
		<p class="subheading" id="processing_action"></p>
	</div>
	<div class="twelve columns centered" style="text-align: center;">
		<a href="#" id="github_show" class="large radius button">
			<p>
				<img src="<?=$images;?>/icons/githubpx.png" alt="Fetch my GitHub Repos" title="Fetch my GitHub Repos" align="left" style="margin-right: 15px;" />
				Fetch my GitHub Repos by Clicking this Awesome Button!
			</p>
		</a>
	</div>

	<div class="twelve columns" style="display:none;" id="github_area">
		<table id="github_repos_table"></table>
	</div>
</div>


<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
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
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
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
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
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
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
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