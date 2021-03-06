<?php 

$title = "Resume";
include( 'includes/header.inc.php' ); ?>

<link href='http://fonts.googleapis.com/css?family=Quicksand:300|Wire+One|Josefin+Sans:300' rel='stylesheet' type='text/css'>

<script>

$(document).ready( function() {
	var navbar_top = $("#resume_nav").offset().top;
	var navbar_height = $("#resume_nav").height();
	//var navbar_bottom = parseInt( navbar_top ) + parseInt( navbar_height );

	$(window).scroll( function() {
		var scrolltop = $(window).scrollTop();
		if( scrolltop > navbar_top ) {
			$("#resume_nav").css({ position : "fixed" , top : "-20px" , left : 0 , width : "100%" }).addClass("navbar_notAtTop");
			$("#backToTop").show();
		} else {
			$("#resume_nav").css({ position : "" }).removeClass("navbar_notAtTop");
			$("#backToTop").hide();
		}
	});

	$("#resume_nav li a, #resume_nav li ul li a").click( function() {

		if( $("#resume_nav").hasClass("navbar_notAtTop") ) {
			var padding = 50;
		} else {
			var padding = 100;
		}
		var pos = $( $(this).attr("href") ).offset().top;
		$('html,body').animate({ scrollTop : pos - padding }, 500 );
		return false;

	});

/*
	@todo: Change all IDs to classes so that I can ease in on each page load.
	
	$(window).bind( "load" , function() {
		var section = window.location.href.split("#")[1];
		$("html,body").animate({ scrollTop : $( "#" + section ).offset().top }, 500 );
	});

*/
});

</script>

<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;line-height: 100%;">
			Let me show you why you should hire me. 
		</p>
		<hr />
		<ul class="nav-bar" id="resume_nav">
			<li><a href="#objective">Objective</a></li>
			<li class="has-flyout">
				<a href="#experience">Experience</a>
				<!-- <a href="#" class="flyout-toggle"><span></span></a> -->
				<ul class="flyout">
					<li><a href="#job_latimundo">Latimundo</a></li>
					<li><a href="#job_zeeway">Zee-Way</a></li>
					<li><a href="#job_refreshedweb">Refreshed Web Design</a></li>
					<li><a href="#job_limestone">Limestone Networks</a></li>
					<li><a href="#job_ihop">IHOP</a></li>
				</ul>
			</li>
			<li><a href="#certs">Certifications</a></li>
			<li><a href="<?=$url;?>/portfolio">Portfolio</a>
			<li class="has-flyout">
				<a href="#skills">Training / Skills</a>
				<!-- <a href="#" class="flyout-toggle"><span></span></a> -->
				<ul class="flyout">
					<li><a href="#skill_software">Software</a></li>
					<li><a href="#skill_programming">Programming Languages</a></li>
					<li><a href="#skill_markup">Structural/Markup Languages</a></li>
					<li><a href="#skill_frameworks">Frameworks</a></li>
					<li><a href="#skill_database">Database</a></li>
					<li><a href="#skill_servers">Server Administration</a></li>
					<li><a href="#skill_webservers">Webserver Technology</a></li>
					<li><a href="#skill_versioning">Code Versioning</a></li>
					<li><a href="#skill_support">Tech Support</a></li>
					<li><a href="#skill_extensions">Browser Extensions</a></li>
				</ul>
			</li>
			<li><a href="#education">Education</a></li>
			<li><a href="#references">References</a></li>
			<li style="float: right;"><a href="#logo" id="backToTop" style="display: none;">&uArr; Scroll Back to Top &uArr;</a></li>
			<li class="down" style="float: right;"><a href="#" style="font-family: Open Sans;font-weight: 700;font-size: 1.5em;letter-spacing: -2px;">Hire Me!</a></li>
		</ul>


	</div>
</div>


<div class="row" id="resume">

	<div class="twelve columns">


		<section id="objective">
			<p class="section_title">OBJECTIVE</p>
			<p class="subheading">

				To work in a technology-centric environment and thrive as a member of an influential team.

			</p>
		</section>

		<div class="ellipses">
			<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
		</div>

		<p class="section_title" id="experience">PROFESSIONAL EXPERIENCE</p>

		<section id="job_latimundo">
			<div class="row">
				<div class="eight columns">
					<p class="heading">SENIOR PHP DEVELOPER</p>
					<p class="subheading">Latimundo</p>
				</div>
				<div class="four columns" style="text-align: right;">
					<p style="margin-top: 20px;">February 2012 - October 2012</p>
					<p>Dallas, Texas</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<p>
						Latimundo provides media production and digital effects services as well as offers digital animation rendering services to numerous clients in the Dallas/Fort Worth Metroplex.
					</p>
					<ul>
						<li>Configure, secure, and maintain high availability Linux web servers.</li>
						<li>Design, build, deploy, and maintain PHP web applications in multiple high-traffic web properties.</li>
					</ul>
				</div>
			</div>
		</section>


		<section id="job_zeeway">
			<div class="row">
				<div class="eight columns">
					<p class="heading">DIRECTOR OF BUSINESS DEVELOPMENT</p>
					<p class="subheading">Zee-Way Hosting</p>
				</div>
				<div class="four columns" style="text-align: right;">
					<p style="margin-top: 20px;">2010 - Present</p>
					<p>Dallas, Texas</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<p>
						Increase revenue and expand availability to offer semi-managed shared, virtual, and dedicated server hosting to clients in the US and around the world.
					</p>
					<ul>
						<li>Coordinate business relationships with incoming and existing clients.</li>
						<li>Assist in overseeing web development and new service features.</li>
					</ul>
				</div>
			</div>
		</section>


		<section id="job_refreshedweb">
			<div class="row">
				<div class="eight columns">
					<p class="heading">FOUNDER / FREELANCER</p>
					<p class="subheading">Refreshed Web Design</p>
				</div>
				<div class="four columns" style="text-align: right;">
					<p style="margin-top: 20px;">January 2009 - Present</p>
					<p>Dallas, Texas</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<p>
						Founded a small freelance web development firm targeting mid-budget clients interested in building and maintaining an active web presence.
					</p>
					<ul>
						<li>Specialization in PHP-based web application development.</li>
						<li>Built solutions for clients, ranging from productivity management to telephony.</li>
						<li>Freelance business, offering clients ad hoc solutions for their needs.</li>
					</ul>
				</div>
			</div>
		</section>


		<section id="job_limestone">
			<div class="row">
				<div class="eight columns">
					<p class="heading">SALES SPECIALIST</p>
					<p class="subheading">Limestone Networks, Inc.</p>
				</div>
				<div class="four columns" style="text-align: right;">
					<p style="margin-top: 20px;">August 2008 - April 2009</p>
					<p>Dallas, Texas</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<p>
						Handled incoming sales and business opportunities in an unmanaged dedicated hosting environment.
					</p>
					<ul>
						<li>Generated, analyzed, and presented client, inventory, and sales data metrics.</li>
						<li>Assisted clients over chat-, email-, and phone-based support channels.</li>
						<li>Financial monitoring, including chargeback tracking and invoice management.</li>
					</ul>
				</div>
			</div>
		</section>


		<section id="job_ihop">
			<div class="row">
				<div class="eight columns">
					<p class="heading">MANAGER</p>
					<p class="subheading">IHOP</p>
				</div>
				<div class="four columns" style="text-align: right;">
					<p style="margin-top: 20px;">March 2007 - January 2008</p>
					<p>Dallas, Texas</p>
				</div>
			</div>
			<div class="row">
				<div class="twelve columns">
					<p>
						Managed 10-20 employees concurrently in a high-volume food service environment.
					</p>
					<ul>
						<li>Handled scheduling, labor cost management, and inventory management.</li>
						<li>Handled all office equipment and point-of-sale system troubleshooting and support.</li>
					</ul>
				</div>
			</div>
		</section>
	</div>


	<div class="ellipses">
		<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
	</div>



	<section id="certs">

		<p class="section_title">CERTIFICATIONS</p>
		<div class="row">
			<div class="twelve columns">
				<div class="panel">
					Below you will find a complete list of the certifications I am currently earning. Though I have not completed the full course 
					regimen and become officially certified, I have made significant progress towards several technology certifications 
					that demonstrate my knowledge and skills in these areas.
				</div>
				<table style="width: 100%;">
					<thead>
						<th style="width: 30%;">Certification Authority</th>
						<th style="width: 30%;">Certification Name</th>
						<th style="width: 40%;">Progress</th>
					</thead>
					<tbody>
						<tr>
							<td>Cisco</td>
							<td>CCENT</td>
							<td><div class="nice radius progress twenty"><span class="meter" style="width: 5%;"></span></div></td>
						</tr>
						<tr>
							<td>CompTIA</td>
							<td>A+</td>
							<td><div class="nice radius progress twenty"><span class="meter" style="width: 65%;"></span></div></td>
						</tr>
						<tr>
							<td>CompTIA</td>
							<td>Network+</td>
							<td><div class="nice radius progress twenty"><span class="meter" style="width: 15%;"></span></div></td>
						</tr>
						<tr>
							<td>CompTIA</td>
							<td>Linux+</td>
							<td><div class="nice radius progress twenty"><span class="meter" style="width: 55%;"></span></div></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>


	<div class="ellipses">
		<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
	</div>


	<section id="portfolio">
	
	<p class="section_title">PORTFOLIO</p>
		<div class="row">
			<div class="twelve columns">
				<a href="<?=$url;?>/portfolio" alt="Click to View my Portfolio" title="Click to View my Portfolio"><p class="subheading">Click to View my Portfolio</p></a>
			</div>
		</div>
	</section>


	<div class="ellipses">
		<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
	</div>


	<section id="skills">
	
		<p class="section_title">TRAINING / SKILLS</p>
		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_software">Software</p>
			</div>
		</div>
		<div class="row">
			<div class="panel four columns">
				<p class="subheading small">Adobe Creative Suite</p>
				<ul>
					<li>Fireworks</li>
					<li>Photoshop</li>
					<li>Dreamweaver</li>
				</ul>
				<img src="<?=$url;?>/assets/images/icons/resume/adobe_fireworks.png" alt="Adobe Fireworks" title="Adobe Fireworks"/>
				<img src="<?=$url;?>/assets/images/icons/resume/adobe_photoshop.png" alt="Adobe Photoshop" title="Adobe Photoshop"/>
				<img src="<?=$url;?>/assets/images/icons/resume/adobe_dreamweaver.png" alt="Adobe Dreamweaver" title="Adobe Dreamweaver"/>
			</div>
			<div class="panel four columns">
				<p class="subheading small">Microsoft Office Suite</p>
				<ul>
					<li>Excel <span class="radius label">Macros and Formulas</span> </li>
					<li>Word</li>
					<li>Powerpoint</li>
					<li>Access</li>
				</ul>
				<img src="<?=$url;?>/assets/images/icons/resume/office_excel.png" alt="Microsoft Excel" title="Microsoft Excel"/>
				<img src="<?=$url;?>/assets/images/icons/resume/office_word.png" alt="Microsoft Word" title="Microsoft Word"/>
				<img src="<?=$url;?>/assets/images/icons/resume/office_powerpoint.png" alt="Microsoft Powerpoint" title="Microsoft Powerpoint"/>
				<img src="<?=$url;?>/assets/images/icons/resume/office_access.png" alt="Microsoft Access" title="Microsoft Access"/>
			</div>
			<div class="panel four columns">
				<p class="subheading small">3D Modeling / Animation</p>
				<ul>
					<li>Cinema 4D <span class="radius label">Text-Based Animation</span> </li>
					<li>Blender</li>
				</ul>
				<img src="<?=$url;?>/assets/images/icons/resume/anim_c4d.png" alt="Cinema 4D" title="Cinema 4D"/>
				<img src="<?=$url;?>/assets/images/icons/resume/anim_blender.png" alt="Blender" title="Blender"/>
			</div>

		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_programming">Programming Languages</p>
			</div>
		</div>
		<div class="row">
			<div class="radius callout panel two columns">
				<p class="subheading small">PHP</p>
				<img src="<?=$url;?>/assets/images/icons/resume/page_php_48.png" alt="Object-Oriented PHP" title="Object-Oriented PHP"  />
			</div>
			<div class="radius callout panel two columns">
				<p class="subheading small">Javascript</p>
				<img src="<?=$url;?>/assets/images/icons/resume/page_javascript_48.png" alt="Object-Oriented Javascript" title="Object-Oriented Javascript" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Bash Shell</p>
				<img src="<?=$url;?>/assets/images/icons/resume/shell.png" alt="Bash Shell Scripting" title="Bash Shell Scripting" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Perl</p>
				<img src="<?=$url;?>/assets/images/icons/resume/lang_perl.png" alt="Perl" title="Perl" />
			</div>
			<div class="radius callout panel two columns">
				<p class="subheading small">Less CSS</p>
				<img src="<?=$url;?>/assets/images/icons/resume/lang_less.png" alt="Less CSS" title="Less CSS"  />
			</div>
			<div class="panel two columns">
				<p class="subheading small">SASS</p>
				<img src="<?=$url;?>/assets/images/icons/resume/lang_sass.png" alt="SASS" title="SASS" style="width: auto;height: 48px;" />
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading small">All the code that I write is...</p>
				<div class="panel">
					<p class="subheading small"><strong>Object-Oriented:</strong> Harness the power of encapsulation, polymorphism, abstraction, modularity and inheritance 
					to write code that is beautiful, functional, and easier to understand and debug.</p>
					<p class="subheading small"><strong>Modular:</strong> I don't like writing the same code twice. Neither should you.</p>
					<p class="subheading small"><strong>Semantic:</strong> I set myself up for success later when debugging by making my class/variable names consistent and understandable.</p>
					<p class="subheading small"><strong>Well-commented:</strong> Comments and documentation are absolutely crucial when building a codebase.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_markup">Structural / Markup Languages</p>
			</div>
		</div>
		<div class="row">
			<div class="panel two columns">
				<p class="subheading small">HTML 5</p>
				<img src="<?=$url;?>/assets/images/icons/resume/html5.png" alt="HTML 5" title="HTML 5" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">CSS 3</p>
				<img src="<?=$url;?>/assets/images/icons/resume/css3.png" alt="CSS 3" title="CSS 3" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">XML</p>
				<img src="<?=$url;?>/assets/images/icons/resume/page_xml_48.png" alt="XML" title="XML" />
			</div>
			<div class="six columns"></div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_frameworks">Frameworks</p>
			</div>
		</div>
		<div class="row">
			<div class="radius callout panel two columns">
				<p class="subheading small">Codeigniter</p>
				<img src="<?=$url;?>/assets/images/icons/resume/codeigniter.png" alt="Codeigniter" title="Codeigniter" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Laravel</p>
				<img src="<?=$url;?>/assets/images/icons/resume/laravel.png" alt="Laravel" title="Laravel" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Symfony</p>
				<img src="<?=$url;?>/assets/images/icons/resume/symfony.png" alt="Symfony" title="Symfony" />
			</div>
			<div class="radius callout panel two columns">
				<p class="subheading small">Wordpress</p>
				<img src="<?=$url;?>/assets/images/icons/resume/wordpress.png" alt="Wordpress" title="Wordpress" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Drupal</p>
				<img src="<?=$url;?>/assets/images/icons/resume/drupal.png" alt="Drupal" title="Drupal" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Joomla</p>
				<img src="<?=$url;?>/assets/images/icons/resume/joomla.png" alt="Joomla" title="Joomla" />
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_database">Database</p>
			</div>
		</div>
		<div class="row">
			<div class="radius callout panel two columns">
				<p class="subheading small">MySQL</p>
				<img src="<?=$url;?>/assets/images/icons/resume/mysql.png" alt="MySQL" title="MySQL" style="width: auto; height: 64px;" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">MongoDB</p>
				<img src="<?=$url;?>/assets/images/icons/resume/mongodb.png" alt="CSS 3" title="CSS 3" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">SQLite</p>
				<img src="<?=$url;?>/assets/images/icons/resume/sqlite.gif" alt="SQLite" title="SQLite" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">PostgreSQL</p>
				<img src="<?=$url;?>/assets/images/icons/resume/postgresql.png" alt="PostgreSQL" title="PostgreSQL" />
			</div>
			<div class="four columns"></div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_servers">Server Administration</p>
			</div>
		</div>
		<div class="row">
			<div class="panel four columns">
				<p class="subheading small">Administration</p>
				<ul>
					<li><strong>Red Hat / Debian:</strong> I have extensive experience with set up, configuration, security, and maintenance of Red Hat- and Debian-based Linux servers.</li>
					<li><strong>CLI:</strong> I am proficient and very comfortable working within a Linux command line or Bash shell.</li>
				</ul>
			</div>
			<div class="panel four columns">
				<p class="subheading small">Security</p>
				<ul>
					<li><strong>Firewall:</strong> I use CSF, LFD, and iptables to harden the perimeter defenses of servers that I administer.</li>
					<li><strong>Hardening:</strong> Non-standard SSH ports, SSH key-based access, and host-based access control are standard for all servers in my care.</li>
				</ul>
			</div>
			<div class="panel four columns">
				<p class="subheading small">Automation</p>
				<ul>
					<li><strong>Cron / Shell Scripting:</strong> Nobody likes to run the same tasks over and over manually. That's why I write shell scripts in Bash or Perl and automate those tasks using the cron utility.</li>
					<li><strong>Server Monitoring:</strong> I take server health very seriously. That's why I write utilities to interact with <strong>Zabbix</strong> to help everyone sleep better at night.</li>
				</ul>
			</div>
		</div>


		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_webservers">Server Technology</p>
			</div>
		</div>
		<div class="row">
			<div class="radius callout panel two columns">
				<p class="subheading small">Apache</p>
				<img src="<?=$url;?>/assets/images/icons/resume/apache.png" alt="Apache" title="Apache" style="width: auto; height: 64px;" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Nginx</p>
				<img src="<?=$url;?>/assets/images/icons/resume/nginx.png" alt="Nginx" title="Nginx" style="width: auto; height: 64px;" />
			</div>
			<div class="panel two columns">
				<p class="subheading small">Cherokee</p>
				<img src="<?=$url;?>/assets/images/icons/resume/cherokee.jpg" alt="Cherokee" title="Cherokee" style="width: auto; height: 64px;" />
			</div>
			<div class="six columns"></div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_versioning">Code Versioning</p>
			</div>
		</div>
		<div class="row">
			<div class="panel twelve columns">
				<p>
					I have extensive experience configuring and maintaining distributed versioning systems, including Git and Subversion. 
					I have implemented several code integrity systems to ensure stability of production web applications.
				</p>
			</div>
		</div>


		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_support">Minor Support</p>
			</div>
		</div>
		<div class="row">
			<div class="panel twelve columns">
				<p>
					I have thorough experience troubleshooting and maintaining home and office computer systems, SNMP-enabled nodes, and networking technology.
				</p>
			</div>
		</div>


		<div class="row">
			<div class="twelve columns">
				<p class="subheading" id="skill_extensions">Browser Extensions</p>
			</div>
		</div>
		<div class="row">
			<div class="panel twelve columns">
				<p>
					I have extensive experience creating browser extensions, specializing in Google Chrome. I created a current popular Chrome extension with several hundred users worldwide.
				</p>
			</div>
		</div>
	</section>


	<div class="ellipses">
		<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
	</div>


	<section id="education">
	
		<p class="section_title">EDUCATION</p>
		<div class="row">
			<div class="ten columns">
				<p class="subheading" id="skill_software">Richland College</p>
				<p class="subheading small">
					Associate of Applied Science in Software Programming and Engineering
				</p>
			</div>
			<div class="two columns">
				<p class="subheading small" style="text-align: right;">[2013]</p>
			</div>
		</div>

		<div class="row">
			<div class="ten columns">
				<p class="subheading" id="skill_software">Richardson High School</p>
				<p class="subheading small">
					General Equivalency Diploma
				</p>
			</div>
			<div class="two columns">
				<p class="subheading small" style="text-align: right;">[2007]</p>
			</div>
		</div>
	</section>


	<div class="ellipses">
		<span class="e1">&nbsp;</span><span class="e2">&nbsp;</span><span class="e3">&nbsp;</span>
	</div>


	<section id="references">
	
		<p class="section_title">REFERENCES</p>
		<div class="row">
			<div class="twelve columns">
				<p class="subheading">If you would like a copy of my resume complete with references, please <a href="#">click here</a>.</p>
			</div>
		</div>
	</section>
</div>


<?php include( 'includes/footer.inc.php' ); ?>.