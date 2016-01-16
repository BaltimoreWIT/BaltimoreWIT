
		<script src="/js/vendor/jquery-1.10.2.min.js"></script>
		<script src="/js/events.js"></script>

		<?php
			switch ($pageTemplate) {
				case "homepage" :
					echo "<script src='/js/vendor/jquery.typer.js'></script>";
			}
		?>
		
		<script>
			$(document).ready(function() {
				mobileMenu();
				if ($('div').hasClass('interior')) {
					layoutInit();
				}
			});

			// Refills Accordion
			$('.js-accordion-trigger').bind('click', function(e){
				jQuery(this).parent().find('.js-accordion-content').slideToggle('fast');
				jQuery(this).parent().toggleClass('is-expanded');
				e.preventDefault();
			});

			$(window).bind('resize', function(e) {
				window.resizeEvt;
				$(window).resize(function() {
					clearTimeout(window.resizeEvt);
					window.resizeEvt = setTimeout(function() {
						//code to do after window is resized
						layoutInit();
					}, 250);
				});
			});
			
			function mobileMenu() {
				var menuToggle = $("#js-mobile-menu").unbind();
			
				$("#js-navigation-menu").removeClass("show");
				menuToggle.on("click", function(e) {
					e.preventDefault();
					$("#js-navigation-menu").slideToggle(function() {
						if ($("#js-navigation-menu").is(":hidden")) {
							$("#js-navigation-menu").removeAttr("style");
						}
					});
				});
			};
			// Hide Header on on scroll down
			var didScroll;
			var lastScrollTop = 0;
			var delta = 5;
			var navbarHeight = $("#js-mobile-menu").outerHeight();

			$(window).scroll(function(event){
					didScroll = true;
			});

			setInterval(function() {
					if (didScroll) {
							hasScrolled();
							didScroll = false;
					}
			}, 250);

			function hasScrolled() {
					var st = $(this).scrollTop();
					
					// Make sure they scroll more than delta
					if(Math.abs(lastScrollTop - st) <= delta)
							return;
					
					// If they scrolled down and are past the navbar, add class .nav-up.
					// This is necessary so you never see what is "behind" the navbar.
					if (st > lastScrollTop && st > navbarHeight){
							// Scroll Down
							$("#js-mobile-menu").removeClass("nav-down").addClass("nav-up");
					} else {
							// Scroll Up
							if(st + $(window).height() < $(document).height()) {
									$("#js-mobile-menu").removeClass("nav-up").addClass("nav-down");
							}
					}
					
					lastScrollTop = st;
			};

			function layoutInit() {
				var widescreen = $(window).width() >= 730;
				var mobile = $(window).width() < 730;

				if ($("div").hasClass("interior")) {
					if (widescreen) {
						$("#js-site-header").insertBefore("#js-sitenav");
					} else {
						$("#js-site-header").insertAfter("#js-sitenav");
					}
				}
			}

			if ($("div").hasClass("homepage")) {
				$(function () { $("[data-typer-targets]").typer(); });
			}
		</script>
		<!-- Set up and add Google Analytics here -->

	</body>
</html>
