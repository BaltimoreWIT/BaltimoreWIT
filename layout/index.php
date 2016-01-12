<?php
 	ini_set("include_path", ".:../:./includes:../includes");
	$pageTemplate = "homepage";
	include "header.php";
?>

			<main>
				<?php include "events.php" ?>
				<section class="news fullView">
					<h3 class="sectionHeading">
						<a href="#" title="View All News">News</a>
					</h3>
					<article class="sectionContent">
						<h4 class="articleHeadline">
							<a href="#">#hellobaltimore</a>
						</h4>
						<p class="meta">
							<span>by</span> 
							Baltimore WIT
						</p>
						<div class="articleContent">This content will be updated when the blog post is finalized.<span class="metaContinueReading">&hellip; <a href="#" title="Continue reading">read more</a></span></div>
					</article>
				</section>
				<section class="blog fullView">
					<h3 class="sectionHeading">
						<a href="#" title="View All Blogs">Blog</a>
					</h3>
					<article class="sectionContent">
						<h4 class="articleHeadline">
							<a href="#">Blog Title</a>
						</h4>
						<p class="meta">
							<span>by</span> 
							Author Name
						</p>
						<div class="articleContent">Blog Post<span class="metaContinueReading">&hellip; <a href="#" title="Continue reading">read more</a></span></p>
					</article>
				</section>
				<section class="blog fullView">
					<h3 class="sectionHeading">
						<a href="#" title="View All Blogs">Blog</a>
					</h3>
					<article class="sectionContent">
						<h4 class="articleHeadline">
							<a href="#">Blog Title</a>
						</h4>
						<p class="meta">
							interviewed <span>by</span> Author Name
						</p>
						<div class="articleContent">Blog Post<span class="metaContinueReading">&hellip; <a href="#" title="Continue reading">read more</a></span></p>
					</article>
				</section>
				<section class="careers minView">
					<h3 class="sectionHeading">
						<a href="#">Careers</a>
					</h3>
					<div class="sectionContent">
						<div class="jobTweets">
							<p>Loading&hellip;</p>
						</div>
						<script src="js/jquery-1.11.1.min.js"></script>
						<script src="js/tweets.js"></script>
					</div>
				</section>
				<section class="careers minView">
					<h3 class="sectionHeading">
						<a href="#">Careers</a>
					</h3>
					<div class="sectionContent btnWrapper">
						<a href="/careers/mentoring" class="btn btnDefault">
							Be a
							<em>mentor</em>
						</a>
						<a href="/careers/mentoring" class="btn btnDefault">
							Find a
							<em>mentor</em>
						</a>
					</div>
				</section>
				<section class="community minView">
					<h3 class="sectionHeading">
						<a href="#">Community</a>
					</h3>
					<div class="sectionContent">
						<ul>
							<li>
								<a href="#">Blog</a>
							</li>
							<li>
								<a href="#">Resources</a>
							</li>
							<li>
								<a href="#">Connect</a>
							</li>
							<li>
								<a href="#">Code of Conduct</a>
							</li>
						</ul>
					</div>
				</section>
			</main>

			<?php include "footer.php" ?>

		<?php include "footer-js.php" ?>
