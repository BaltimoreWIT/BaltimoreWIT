<?php
 	ini_set("include_path", ".:../:./includes:../includes:../../includes");
 	$pageTemplate = "interior";
	$pageTitle = "Blog Title";
	// $metaDesc = "";
	// $ogTitle = "Contact Baltimore Women in Tech";
	$ogType = "article";
	$ogImage = "http://baltimorewomenintech.com/images/bwit_logotext_li.png";
	$ogURL = "http://baltimorewomenintech.com/blog/2016/blog-title/";
	include "header.php";
?>

			<main>
				<article>
					<header class="articleHeader">
						<h1 class="articleHeadline">Interviewee Name</h1>
						<p class="meta"><span>by</span> Keisha Reed</p>
					</header>
						<div class="articleContent">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos impedit incidunt rem illo quas dolore voluptas accusamus et eligendi sunt quaerat aliquam dicta facere aut nam atque ad, sapiente vitae.</p>
							<h1>CSS Basic Elements</h1>
							<p>The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>
							<hr />
							<h1>Line length</h1>
							<p>abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</p>

							<h1>Heading 1</h1>

							<h2>Heading 2</h2>
							<p>And then some paragraph text to follow. The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

							<h3>Heading 3</h3>
							<p>And then some paragraph text to follow. The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

							<h4>Heading 4</h4>
							<p>And then some paragraph text to follow. The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

							<h5>Heading 5</h5>
							<p>And then some paragraph text to follow. The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

							<h6>Heading 6</h6>
							<p><img src="http://placekitten.com/g/400/350" alt="" class="alignRight">And then some paragraph text to follow. The purpose of this HTML is to help determine what default settings are with CSS and to make sure that all possible HTML Elements are included in this HTML so as to not miss any possible Elements when designing a site.</p>

							<h1>Paragraph</h1>

							<p><img alt="CSS" src="http://1.bp.blogspot.com/-9r8JfdZNBwQ/UicS32mD_rI/AAAAAAAAA3U/h5tQ7pMWns0/s1600/Css.jpg" /></p>
							<p>Lorem ipsum dolor sit amet, <a title="test link" href="#">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
							<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

							<blockquote>
							  <p>"This stylesheet is going to help so freaking much." <br />
							<cite>—Blockquote</cite></p>
							</blockquote>

							<p>Lorem ipsum dolor sit amet, <em>emphasis</em> consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

							<h1>List Types</h1>

							<h3>Definition List</h3>

							<dl>

							<dt>Definition List Title</dt>
							<dd>This is a definition list division.</dd>

							</dl>

							<h3>Ordered List</h3>

							<ol>
							  <li>List Item 1</li>
							  <li>List Item 2</li>
							  <li>List Item 3</li>
							</ol>

							<h3>Unordered List</h3>

							<ul>
							  <li>List Item 1</li>
							  <li>List Item 2</li>
							  <li>List Item 3</li>
							</ul>

							<h1>Tables</h1>

							<table cellspacing="0" cellpadding="0">

							<thead>

							<tr>
							<th>Table Header 1</th>
							<th>Table Header 2</th>
							<th>Table Header 3</th>
							</tr>

							</thead>

							<tbody>

							<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							</tr>

							<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							</tr>

							<tr>
							<td>Division 1</td>
							<td>Division 2</td>
							<td>Division 3</td>
							</tr>

							</tbody>
							</table>

							<h1>Misc Stuff - abbr, acronym, pre, code, sub, sup, etc.</h1>

							<p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. <cite>cite</cite>. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus. <abbr title="Avenue">AVE</abbr></p>

							<pre>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. <acronym title="National Basketball Association">NBA</acronym> Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.  <abbr title="Avenue">AVE</abbr>
							</pre>

							<blockquote>
							  <p>"This stylesheet is going to help so freaking much." <br />
							-Blockquote</p>
							</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum aperiam rerum voluptate dignissimos atque esse ipsa amet quos magni natus, vitae assumenda incidunt id tenetur aliquam rem, iure delectus illo!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni in, voluptates dignissimos, error asperiores rerum tempora, est nulla reiciendis sint porro corrupti quas aperiam suscipit cupiditate quod incidunt possimus necessitatibus.</p>
						</div>
						<footer class="articleFooter">
							<div class="shareWrapper">
								<p>Share This</p>
								<ul class="socialWrapper">
									<li>
										<a href="http://twitter.com/intent/tweet?text=Article+Title+via+@baltimorewit+%23bmorewit&url=http:%2F%2Fbaltimorewomenintech.com%2FTHISURL" target="_blank" title="Share this on Twitter">
										<span class="icon logo-twitter">
											<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" x="0" y="0" viewBox="0 0 50 50" xml:space="preserve"><path fill="#FFFFFF" d="M47.4 8.5L47.4 8.5M35.4 3C28.7 3 23.3 8.3 23 14.9c-6.3-1-12.1-4.3-16.1-9.3C6.4 5.1 5.8 4.8 5.1 4.8c-0.1 0-0.2 0-0.3 0C4 4.9 3.3 5.4 3 6.1c-5 10.6-2.6 18.3 0.3 22.9 2.1 3.4 5 5.9 7.8 7.6C8.9 37.6 6.6 38 4.2 38c-1.3 0-2.4 1.1-2.4 2.4 0 2.3 3.6 3.9 4.8 4.4 2.2 1 5.8 2.1 10.5 2.1 11.5 0 18.8-5.5 22.8-10.1 5-5.7 7.9-13.2 7.9-20.7 0-0.3 0-0.6 0-0.9 0.2-0.5 0.3-1 0.5-1.4 0.5-1.8 0.9-2.7 1.5-4.8 0.1-0.2 0.2-0.5 0.2-0.8 0-1.3-1-2.3-2.3-2.3l0 0 0 0h-0.8c-0.8 0-1.2 0-1.6 0 -0.5 0-0.7 0-1.2 0h-0.2C41.4 4.2 38.4 3 35.4 3L35.4 3z"/></svg>
										</span>
									</a></li>
									<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//baltimorewomenintech.com/THISURL" target="_blank" title="Share this on Facebook">
										<span class="icon logo-fb">
											<svg xmlns="http://www.w3.org/2000/svg" version="1.2" baseProfile="tiny" x="0" y="0" viewBox="0 0 50 50" xml:space="preserve"><path fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2.4" stroke-miterlimit="10" d="M21.9 47h2V23.4h8.7v-2H24v-5.6C24 8.2 25.1 5 32.2 5h0.5V3h-0.5c-8.6 0-10.3 4.5-10.3 12.8v5.6h-4.6v2h4.6C21.9 23.4 21.9 47 21.9 47z"/></svg>
										</span>
									</a></li>
								</ul>
							</div>
							<div class="articleContribWrapper">
								<div class="imgWrapper">
									<img src="http://placekitten.com/g/250/250" alt="" />
								</div>
								<p class="articleContribBio"><strong>Dolor sit amet</strong> consectetur adipisicing elit. Hic dolorum <a href="#">example link</a> libero provident ex eaque? Repellendus laudantium hic, totam veniam, illum commodi earum consequatur mollitia.</p>
							</div>
						</footer>
				</article>
			</main>

			<?php include "footer.php" ?>

		<?php include "footer-js.php" ?>
