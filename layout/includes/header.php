<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>
		<?php
			if (isset($pageTitle)) {
			echo ${pageTitle} . " | ";
			}
		?>
		Baltimore Women in Tech
		</title>
		<?php if (isset($ogTitle)) { ?>
		<meta property="og:title" content="<?php echo $ogTitle ?>" />
		<?php } else if (isset($pageTitle)) { ?>
		<meta property="og:title" content="<?php echo $pageTitle ?>" />
		<?php } else { ?>
		<meta property="og:title" content="Baltimore Women in Tech" />
		<?php } ?>

		<?php if (isset($metaDesc)) { ?>
		<meta description="<?php echo $metaDesc ?>">
		<?php }  if (isset($ogType)) { ?>
		<meta property="og:type" content="<?php echo $ogType ?>" />
		<?php }  if (isset($ogURL)) { ?>
		<meta property="og:url" content="<?php echo $ogURL ?>" />
		<?php }  if (isset($ogImage)) { ?>
		<meta property="og:image" content="<?php echo $ogImage ?>" />
		<?php } ?>
		<link href="/styles/<?php echo $pageTemplate ?>.css" media="all" rel="stylesheet" />
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	</head>
	<body>
		<div class="<?php echo $pageTemplate ?> siteWrapper">
			<div class="masthead">
				<nav id="js-sitenav" class="siteNavWrapper" role="navigation">
					<a class="navMenu" href="#" id="js-mobile-menu" title="Site Menu">Menu</a>
					<ul class="siteNav show" id="js-navigation-menu">
						<li>
							<a href="/" title="Homepage">Home</a>
						</li>
						<li>
							<a href="/about" title="About Us">About</a>
							<ul class="submenu">
								<li><a href="/about/#members" title="Member Organizations">Members</a></li>
								<li>
									<a href="/about/#join" title="Join Baltimore Women in Tech">Join</a>
								</li>
								<li>
									<a href="/about/#donate" title="Donate to Baltimore Women in Tech">Donate</a>
								</li>
								<li>
									<a href="/about/contact" title="Contact Us">Contact</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="/news" title="News and Updates">News</a>
						</li>
						<li>
							<a href="/careers" title="Careers">Careers</a>
							<ul class="submenu">
								<li>
									<a href="/careers/jobs" title="Job Postings">Jobs</a>
								</li>
								<li>
									<a href="/careers/mentoring" title="Be a Mentor or Mentee">Mentoring</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="/community" title="Baltimore Women in Tech Community">Community</a>
							<ul class="submenu">
								<li>
									<a href="/community/calendar" title="Baltimore Women in Tech Events">Events</a>
								</li>
								<li>
									<a href="/blog" title="Blog Posts">Blog</a>
								</li>
								<li>
									<a href="/community/resources" title="Resources">Resources</a>
								</li>
								<li>
									<a href="/community/#connect" title="Connect With Us">Connect</a>
								</li>
								<li>
									<a href="/community/codeofconduct" title="Our Code of Conduct">Code of Conduct</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<header id="js-site-header" class="siteHeader">
					<div class="row">
						<div class="siteLogo" title="Baltimore Women in Tech">
							<h1 class="siteName">Baltimore Women in Tech</h1>
						</div>
						<div class="siteDesc">
							<h2 class="headline">We are a group of women in technology &amp; digital careers or studies who <span data-typer-targets="support each other, exchange ideas,learn new skills,encourage others,grow our networks,advocate for diversity in our fields">support each other</span>.</h2>
							<div class="siteLogoSecondary">
							</div>
						</div>
					</div>
					<div class="btnWrapper">
						<a class="btn btnPrimary joinCTA" href="/about/#join">Join</a>
						<a class="btn btnDefault" href="/about">Learn More</a>
					</div>
				</header>
			</div>