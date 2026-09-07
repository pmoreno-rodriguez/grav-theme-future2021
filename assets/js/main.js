/*
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$menu = $('#menu'),
		$sidebar = $('#sidebar'),
		$main = $('#main');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Menu.
		$menu
			.appendTo($body)
			.panel({
				delay: 500,
				hideOnClick: true,
				hideOnSwipe: true,
				resetScroll: true,
				resetForms: true,
				side: 'right',
				target: $body,
				visibleClass: 'is-menu-visible'
			});

	// Search (header).
		var $search = $('#search'),
			$search_input = $search.find('input');

		$body
			.on('click', '[href="#search"]', function(event) {

				event.preventDefault();

				// Not visible?
					if (!$search.hasClass('visible')) {

						// Reset form.
							$search[0].reset();

						// Show.
							$search.addClass('visible');

						// Focus input.
							$search_input.focus();

					}

			});

		$search_input
			.on('keydown', function(event) {

				if (event.keyCode == 27)
					$search_input.blur();

			})
			.on('blur', function() {
				window.setTimeout(function() {
					$search.removeClass('visible');
				}, 100);
			});

	// Intro.
		var $intro = $('#intro');

		// Move to main on <=large, back to sidebar on >large.
			breakpoints.on('<=large', function() {
				$intro.prependTo($main);
			});

			breakpoints.on('>large', function() {
				$intro.prependTo($sidebar);
			});
		
	// Back to top
	
		var btn = $('#back-to-top');

		$(window).scroll(function() {
			if ($(window).scrollTop() > 300) {
			btn.addClass('show');
			} else {
			btn.removeClass('show');
			}
		});
		
		btn.on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, '300');
		});

	// Header dropdown navigation (horizontal scroll & fixed submenu positioning).
		var $navDropdown = $('#header .dropdown');

		if ($navDropdown.length) {
			var updateDropdownPosition = function($li) {
				var $submenu = $li.children('ul');
				if (!$submenu.length) return;

				var rect = $li[0].getBoundingClientRect();
				var navRect = $navDropdown[0].getBoundingClientRect();

				if (rect.right < navRect.left || rect.left > navRect.right) {
					$submenu.css('display', 'none');
					return;
				} else {
					$submenu.css('display', '');
				}

				var top = navRect.bottom;
				var left = rect.left;
				var submenuWidth = $submenu.outerWidth() || 240;

				if (left + submenuWidth > window.innerWidth) {
					left = Math.max(10, window.innerWidth - submenuWidth - 10);
				}

				$submenu.css({
					top: top + 'px',
					left: left + 'px'
				});
			};

			var hideTimer = null;

			var showMenu = function($li) {
				clearTimeout(hideTimer);
				$navDropdown.find('> ul > li').not($li).removeClass('dropdown-active');
				$li.addClass('dropdown-active');
				updateDropdownPosition($li);
			};

			var hideMenu = function($li) {
				clearTimeout(hideTimer);
				hideTimer = setTimeout(function() {
					$li.removeClass('dropdown-active');
				}, 220);
			};

			$navDropdown.find('> ul > li').has('> ul')
				.on('mouseenter focusin', function() {
					showMenu($(this));
				})
				.on('mouseleave focusout', function() {
					hideMenu($(this));
				});

			$navDropdown.find('> ul > li > ul')
				.on('mouseenter', function() {
					clearTimeout(hideTimer);
					$(this).closest('li').addClass('dropdown-active');
				})
				.on('mouseleave', function() {
					hideMenu($(this).closest('li'));
				});

			$navDropdown.on('scroll', function() {
				var $activeLi = $navDropdown.find('> ul > li.dropdown-active, > ul > li:hover').has('> ul');
				if ($activeLi.length) {
					updateDropdownPosition($activeLi);
				}
			});

			$window.on('resize scroll', function() {
				var $activeLi = $navDropdown.find('> ul > li.dropdown-active, > ul > li:hover').has('> ul');
				if ($activeLi.length) {
					updateDropdownPosition($activeLi);
				}
			});

			// Mouse wheel horizontal scroll support
			$navDropdown.on('wheel', function(e) {
				var delta = e.originalEvent.deltaY || e.originalEvent.deltaX;
				if (delta !== 0) {
					var maxScrollLeft = this.scrollWidth - this.clientWidth;
					if (maxScrollLeft > 0) {
						var canScrollLeft = this.scrollLeft > 0;
						var canScrollRight = this.scrollLeft < maxScrollLeft;
						if ((delta > 0 && canScrollRight) || (delta < 0 && canScrollLeft)) {
							e.preventDefault();
							this.scrollLeft += delta;
						}
					}
				}
			});
		}

})(jQuery);

