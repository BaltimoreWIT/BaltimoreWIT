<?php
 	ini_set("include_path", ".:../:./includes:../includes");
 	$pageTemplate = "interior";
	$pageTitle = "About Us";
	// $metaDesc = "";
	$ogTitle = "About Baltimore Women in Tech";
	// $ogType = "article";
	$ogImage = "http://baltimorewomenintech.com/images/bwit_logotext_li.png";
	$ogURL = "http://baltimorewomenintech.com/about/";
	include "header.php";
?>

			<main>
				<article>
					<header class="articleHeader">
						<h1 class="articleHeadline">About Baltimore Women in Technology</h1>
					</header>
						<div class="articleContent">
							<p>Baltimore Women in Technology is a platform for collaboration among women in digital careers and studies. We facilitate idea exchange, learning, mentoring and networking, and we advocate for diversity in our fields. Our community is comprised of a multitude of backgrounds, special interests and passions who band together to tackle the gender divide and create camaraderie.</p>
							<p>Our special interests and passions have led to affinity groups and genuine grassroots movements. Some of us work on pipeline initiatives by educating and advocating for K-12 STEM programs for all, creating support systems for girls or training women for advancement of skills/career change into the digital world. Others dig deeper into solutions for retention problems, growth of women into leaders, funding women-led businesses or coaching others on unconscious bias in the workplace. Our common bond is clear though &mdash; our love for Baltimore and our desire to change the ratio.</p>
							<p>Our events and meetings operate in safe environments. This means that we enforce a <a href="/community/codeofconduct">code of conduct</a> to provide all participants the space to speak freely, without judgement or harassment. We expect that events we are cross promoting have the same philosophy.</p>

							<h2 id="members">Members</h2>
							<ul class="noList wrapperFlex memberList">
								<li class="elementWrapper"><a href="http://www.meetup.com/Baltimore-Women-in-Computing-Meetup/" title="Baltimore Women in Computing"><span class="memberLogo">BWIC</span>
								Baltimore Women in Computing</a></li>
								<li class="elementWrapper"><a href="http://gdibaltimore.com" title="Girl Develop It Baltimore"><img src="/images/members/gdi.png" alt="Girl Develop It" class="memberLogo">Girl Develop It Baltimore</a></li>
							</ul>

							<h2 id="join">Join</h2>
							<h3 class="h4">As an individual</h3>
							<p>Individuals are invited to join our mailing list for updates on local events and to join our individual <a href="#members">member organizations</a>.</p>

							<h3 class="h4">As a member organization</h3>
							<p>To join Baltimore Women in Tech, your organization must have a membership comprised of more than 50% women and a focus on technology. Your events must have a published code of conduct. Member organizations will have their events posted to our community calendar and be invited to participate in future BWIT events and collaborations. <a href="mailto:baltimorewit@gmail.com">Contact us about joining this effort.</a></p>

							<h2 id="donate">Donate</h2>
							<p>Some language about nonprofit status and also what donations are/will be used for.</p>
							<a class="btn btnPrimary donateCTA" href="#" target="_blank" title="Donate to Baltimore Women in Tech">Donate</a>
						</div>
						<footer class="articleFooter">
							<div class="shareWrapper">
								<p>Share This</p>
								<ul class="socialWrapper">
									<li>
										<a href="http://twitter.com/intent/tweet?text=About+Baltimore+Women+In+Tech+via+@baltimorewit+%23bmorewit&url=http:%2F%2Fbaltimorewomenintech.com%2Fabout" target="_blank" title="Share this on Twitter">
										<span class="icon logo-twitter">
											<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" x="0" y="0" viewBox="0 0 50 50" xml:space="preserve"><path fill="#FFFFFF" d="M47.4 8.5L47.4 8.5M35.4 3C28.7 3 23.3 8.3 23 14.9c-6.3-1-12.1-4.3-16.1-9.3C6.4 5.1 5.8 4.8 5.1 4.8c-0.1 0-0.2 0-0.3 0C4 4.9 3.3 5.4 3 6.1c-5 10.6-2.6 18.3 0.3 22.9 2.1 3.4 5 5.9 7.8 7.6C8.9 37.6 6.6 38 4.2 38c-1.3 0-2.4 1.1-2.4 2.4 0 2.3 3.6 3.9 4.8 4.4 2.2 1 5.8 2.1 10.5 2.1 11.5 0 18.8-5.5 22.8-10.1 5-5.7 7.9-13.2 7.9-20.7 0-0.3 0-0.6 0-0.9 0.2-0.5 0.3-1 0.5-1.4 0.5-1.8 0.9-2.7 1.5-4.8 0.1-0.2 0.2-0.5 0.2-0.8 0-1.3-1-2.3-2.3-2.3l0 0 0 0h-0.8c-0.8 0-1.2 0-1.6 0 -0.5 0-0.7 0-1.2 0h-0.2C41.4 4.2 38.4 3 35.4 3L35.4 3z"/></svg>
										</span>
									</a></li>
									<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//baltimorewomenintech.com/about" target="_blank" title="Share this on Facebook">
										<span class="icon logo-fb">
											<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" x="0" y="0" viewBox="0 0 50 50" xml:space="preserve"><path fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2.4" stroke-miterlimit="10" d="M21.9 47h2V23.4h8.7v-2H24v-5.6C24 8.2 25.1 5 32.2 5h0.5V3h-0.5c-8.6 0-10.3 4.5-10.3 12.8v5.6h-4.6v2h4.6C21.9 23.4 21.9 47 21.9 47z"/></svg>
										</span>
									</a></li>
								</ul>
							</div>
						</footer>
				</article>
			</main>

			<?php include "footer.php" ?>

		<?php include "footer-js.php" ?>
