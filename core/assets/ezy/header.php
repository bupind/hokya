<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
				<div class="header-body">
					<div class="header-top">
						<div class="header-top-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-map-marker-alt mr-1"></i>
										<?=$this->pocore()->call->posetting[8]['value'];?>
									</span>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:<?=$this->pocore()->call->posetting[6]['value'];?>"><?=$this->pocore()->call->posetting[6]['value'];?></a>
									</span>
								</div>
								<div class="header-column justify-content-end">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link" href="contact">Contact Us</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-menu-toggle py-2" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
												English	<i class="fas fa-angle-down fa-sm"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
												<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a></li>
												<li><a href="#" class="no-skin"><img src="img/blank.gif" class="flag flag-es" alt="Español" /> Indonesia</a></li>
											</ul>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo">
								<a href="<?=BASE_URL;?>"><img  class="img-responsive" src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="" ></a>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-nav">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav flex-column flex-lg-row" id="mainNav">
												<li class="">
													<a class="dropdown-item dropdown-toggle" href="dashboard">
														Dashboard
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" href="#">
														Elements
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content container">
																<div class="row">
																	<div class="col-lg-3">
																		<span class="dropdown-mega-sub-title">ELEMENTS 1</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-accordions-toggles.html">Accordions &amp; Toggles</a></li>
																			<li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
																			<li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
																			<li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
																			<li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
																			<li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
																			<li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
																			<li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3">
																		<span class="dropdown-mega-sub-title">ELEMENTS 2</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
																			<li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
																			<li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
																			<li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
																			<li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
																			<li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
																			<li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
																			<li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3">
																		<span class="dropdown-mega-sub-title">ELEMENTS 3</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
																			<li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
																			<li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
																			<li><a class="dropdown-item" href="elements-progress-bars.html">Progress Bars</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Content Effects</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
																					<li><a class="dropdown-item" href="elements-content-rotator.html">Content Rotator</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="elements-sections-parallax.html">Sections &amp; Parallax</a></li>
																			<li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
																			<li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3 dropdown-mega-sub-content-block d-none d-lg-block">
																		<img src="img/menu-featured-image-1.png" class="img-responsive content-block-image" alt="" width="110" />
																		<span class="top-sub-title text-color-light-2 d-block">THE MOST</span>
																		<span class="text-color-light font-weight-bold d-block text-4 mb-4">POWERFUL</span>
																		<p class="text-color-light-2">A revolutionary theme<br> trusted by tons of<br> customers</p>
																		<a class="btn d-inline-block content-block-button text-color-primary font-weight-bold p-0" href="#">GET STARTED</a>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="dropdown active">
													<a class="dropdown-item dropdown-toggle active" href="#">
														Features
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Headers</a>
															<ul class="dropdown-menu">
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Default</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="multi-purpose-1.html">Default</a></li>
																		<li><a class="dropdown-item" href="index-header-colored-top-bar.html">Default + Colored Top Bar</a></li>
																		<li><a class="dropdown-item" href="index-header-top-bar-search.html">Default + Top Bar with Search</a></li>
																		<li><a class="dropdown-item" href="index-header-top-bar-button.html">Default + Top Bar with Button</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Effects</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-header-effect-shrink.html">Shrink</a></li>
																		<li><a class="dropdown-item" href="multi-purpose-1.html">Shrink - Header Top</a></li>
																		<li><a class="dropdown-item" href="index-header-effect-reveal.html">Header Reveal</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="index-header-center.html">Center</a></li>
																<li><a class="dropdown-item" href="index-header-logo-between-menu.html">Logo Between Menu</a></li>
																<li><a class="dropdown-item" href="index-header-below-slider.html">Below Slider</a></li>
																<li><a class="dropdown-item" href="index-header-with-borders.html">With Borders</a></li>
																<li><a class="dropdown-item" href="index-header-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="index-header-always-sticky.html">Always Sticky</a></li>
																<li><a class="dropdown-item" href="index-header-floating.html">Floating</a></li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Transparent</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-header-transparent.html">Transparent</a></li>
																		<li><a class="dropdown-item" href="index-header-transparent-bottom-border.html">Transparent - Bottom Border</a></li>
																		<li><a class="dropdown-item" href="index-header-semi-transparent.html">Semi Transparent</a></li>
																		<li><a class="dropdown-item" href="index-header-semi-transparent-light.html">Semi Transparent - Light</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Navbar</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-header-navbar.html">Navbar</a></li>
																		<li><a class="dropdown-item" href="index-header-navbar-centered-logo.html">Navbar - Centered Logo</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Side Header</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-header-side-header-left.html">Side Header Left</a></li>
																		<li><a class="dropdown-item" href="index-header-side-header-right.html">Side Header Right</a></li>
																		<li><a class="dropdown-item" href="index-header-side-header-semi-transparent.html">Side Header Semi Transparent</a></li>
																		<li><a class="dropdown-item" href="index-header-side-header-semi-transparent-light.html">Side Header Semi Transparent - Light</a></li>
																		<li><a class="dropdown-item" href="index-header-side-header-from-out.html">Side Header From Out</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="index-header-overlay-full-screen.html">Overlay Full Screen</a></li>
																<li><a class="dropdown-item" href="index-header-signin.html">Signin / Signup</a></li>
																<li><a class="dropdown-item" href="index-header-logged.html">Logged</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Navigations</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="multi-purpose-1.html">Default</a></li>
																<li><a class="dropdown-item" href="index-navigation-top-line.html">Top Line</a></li>
																<li><a class="dropdown-item" href="index-navigation-stripe.html">Stripe</a></li>
																<li><a class="dropdown-item" href="index-navigation-light-dropdown.html">Light Dropdown</a></li>
																<li><a class="dropdown-item" href="index-navigation-line-under-text.html">Line Under Text</a></li>
																<li><a class="dropdown-item" href="index-navigation-sub-title.html">Sub Title</a></li>
																<li><a class="dropdown-item" href="index-navigation-sub-title-animated.html">Sub Title - Animated</a></li>
																<li><a class="dropdown-item" href="index-navigation-colors.html">Colors</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Footers</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="multi-purpose-1.html#footer">Default</a></li>
																<li><a class="dropdown-item" href="index-footer-simple.html#footer">Simple</a></li>
																<li><a class="dropdown-item" href="index-footer-light.html#footer">Light</a></li>
																<li><a class="dropdown-item" href="index-footer-light-narrow.html#footer">Light Narrow</a></li>
																<li><a class="dropdown-item" href="index-footer-center.html#footer">Center</a></li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Colors</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-footer-color-primary.html#footer">Primary Color</a></li>
																		<li><a class="dropdown-item" href="index-footer-color-secondary.html#footer">Secondary Color</a></li>
																		<li><a class="dropdown-item" href="index-footer-color-tertiary.html#footer">Tertiary Color</a></li>
																		<li><a class="dropdown-item" href="index-footer-color-quaternary.html#footer">Quaternary Color</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="index-footer-reveal.html#footer-anchor">Footer Reveal</a></li>
																<li><a class="dropdown-item" href="index-footer-background.html#footer">Background</a></li>
																<li><a class="dropdown-item" href="index-footer-instagram-twitter.html#footer">Instagram / Twitter Feed</a></li>
																<li><a class="dropdown-item" href="index-footer-newsletter.html#footer">Newsletter</a></li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Contact Form</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-footer-contact-form-default.html#footer">Default</a></li>
																		<li><a class="dropdown-item" href="index-footer-contact-form-transparent.html#footer">Transparent</a></li>
																	</ul>
																</li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Page Headers</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="index-page-header-left-alignment.html">Left Alignment</a></li>
																<li><a class="dropdown-item" href="index-page-header-center-alignment.html">Center Alignment</a></li>
																<li><a class="dropdown-item" href="index-page-header-right-alignment.html">Right Alignment</a></li>
																<li class="dropdown-submenu">
																	<a class="dropdown-item dropdown-toggle" href="#">Colors</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="index-page-header-color-primary.html">Primary Color</a></li>
																		<li><a class="dropdown-item" href="index-page-header-color-secondary.html">Secondary Color</a></li>
																		<li><a class="dropdown-item" href="index-page-header-color-tertiary.html">Tertiary Color</a></li>
																		<li><a class="dropdown-item" href="index-page-header-color-quaternary.html">Quaternary Color</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="index-page-header-dark.html">Dark</a></li>
																<li><a class="dropdown-item" href="index-page-header-custom-background.html">Custom Background</a></li>
																<li><a class="dropdown-item" href="index-page-header-custom-header.html">Custom Header</a></li>
																<li><a class="dropdown-item" href="index-page-header-custom-header-2.html">Custom Header 2</a></li>
																<li><a class="dropdown-item" href="index-page-header-parallax.html">Parallax</a></li>
																<li><a class="dropdown-item" href="index-page-header-video-background.html">Video Background</a></li>
																<li><a class="dropdown-item" href="index-page-header-mini.html">Mini</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Layout Options</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
																<li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
																<li><a class="dropdown-item" href="feature-layout-gap-outside.html">Gap Outside</a></li>
																<li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Extra</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-typography.html">Typography</a></li>
																<li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
																<li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
																<li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Pages
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">About Us</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="about-me.html">About Me</a></li>
																<li><a class="dropdown-item" href="about-us-1.html">About Us 1</a></li>
																<li><a class="dropdown-item" href="about-us-2.html">About Us 2</a></li>
																<li><a class="dropdown-item" href="about-us-3.html">About Us 3</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Contact Us</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="contact-us-1.html">Contact Us 1</a></li>
																<li><a class="dropdown-item" href="contact-us-2.html">Contact Us 2</a></li>
																<li><a class="dropdown-item" href="contact-us-3.html">Contact Us 3</a></li>
																<li><a class="dropdown-item" href="contact-us-4.html">Contact Us 4</a></li>
																<li><a class="dropdown-item" href="contact-us-5.html">Contact Us 5</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Layouts</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-layout-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="page-layout-left-sidebar.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="page-layout-right-sidebar.html">Right Sidebar</a></li>
																<li><a class="dropdown-item" href="page-layout-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																<li><a class="dropdown-item" href="page-layout-sticky-sidebar.html">Sticky Sidebar</a></li>
																<li><a class="dropdown-item" href="page-layout-secondary-navbar.html">Secondary Navbar</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="page-team.html">Team</a></li>
														<li><a class="dropdown-item" href="page-services.html">Services</a></li>
														<li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">FAQ</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-faq-1.html">FAQ 1</a></li>
																<li><a class="dropdown-item" href="page-faq-2.html">FAQ 2</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Extra</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
																<li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
																<li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
																<li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" href="#">
														Portfolio
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content container">
																<div class="row">
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">GRID</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Columns</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">MASONRY</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																			<li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">SIDEBAR LAYOUTS</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																			<li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																			<li><a class="dropdown-item" href="portfolio-sidebar-both.html">Both Sidebar</a></li>
																			<li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">EXTRA</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Ajax</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="portfolio-ajax-on-page.html">Ajax on Page</a></li>
																					<li><a class="dropdown-item" href="portfolio-ajax-on-modal.html">Ajax on Modal</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-image-header.html">Image Header</a></li>
																			<li><a class="dropdown-item" href="portfolio-extra-alternate-list.html">Alternate List</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">PORTFOLIO DETAIL</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="portfolio-detail-1.html">Portfolio Detail 1</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-2.html">Portfolio Detail 2</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-3.html">Portfolio Detail 3</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-4.html">Portfolio Detail 4</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-5.html">Portfolio Detail 5</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-6.html">Portfolio Detail 6</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-7.html">Portfolio Detail 7</a></li>
																			<li><a class="dropdown-item" href="portfolio-detail-8.html">Portfolio Detail 8</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle" href="#">
														Blog
													</a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content container">
																<div class="row">
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">DEFAULT</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-default-full-width.html">Full Width</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-default-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-default-left-sidebar.html">Left Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-default-both-sidebar.html">Both Sidebar</a></li>
																				</ul>
																			</li>
																		</ul>
																		<span class="dropdown-mega-sub-title">TIMELINE</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-timeline.html">Default</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-timeline-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-timeline-left-sidebar.html">Left Sidebar</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">MASONRY</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-masonry-2-columns.html">2 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-masonry-both-sidebar.html">Both Sidebar</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">CARDS</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-cards-4-columns.html">4 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-cards-3-columns.html">3 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-cards-2-columns.html">2 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-cards-full-width.html">Full Width</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-cards-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-cards-left-sidebar.html">Left Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-cards-both-sidebar.html">Both Sidebar</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">GRID</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-grid-2-columns.html">2 Columns</a></li>
																			<li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-grid-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-grid-left-sidebar.html">Left Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-grid-both-sidebar.html">Both Sidebar</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																	<div class="col-lg-1-5">
																		<span class="dropdown-mega-sub-title">SINGLE POST</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="blog-single-post.html">Default</a></li>
																			<li class="dropdown-submenu">
																				<a class="dropdown-item dropdown-toggle" href="#">Sidebars</a>
																				<ul class="dropdown-menu">
																					<li><a class="dropdown-item" href="blog-single-post-right-sidebar.html">Right Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-single-post-left-sidebar.html">Left Sidebar</a></li>
																					<li><a class="dropdown-item" href="blog-single-post-both-sidebar.html">Both Sidebar</a></li>
																				</ul>
																			</li>
																			<li><a class="dropdown-item" href="blog-single-post-small-image.html">Small Image</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="">
													<a class="dropdown-item dropdown-toggle" href="contact">
														Contact
													</a>
												</li>
											</ul>
										</nav>
									</div>
									<button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<span class="close">
											<span></span>
											<span></span>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
