<?php
include('connection.php');
	// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>HOSTSight - Home</title>

	<link rel="stylesheet" type="text/css" href="css/vendors/Bootstrap/bootstrap.min.css">


	<link href="css/plugins/navigation.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/main.min.css">
	<link rel="stylesheet" type="text/css" href="css/theme-font.min.css">

	<!--Styles for RTL-->

	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->
 <!-- IE11 Support -->	<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="js/ie11CustomProperties.js"><\x2fscript>');</script>

</head>
<body>

<!-- Preloader -->

<!--<div id="hellopreloader">
	<div class="preloader">
		<svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
			<g fill="none" fill-rule="evenodd">
				<g transform="translate(2 1)" stroke="#FFF" stroke-width="1.5">
					<circle cx="42.601" cy="11.462" r="5" fill-opacity="1" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="1;0;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="49.063" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;1;0;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="42.601" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;1;0;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="49.125" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;1;0;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="42.663" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;1;0;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="4.938" cy="27.063" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;1;0;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="11.399" cy="11.462" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;1;0" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
					<circle cx="27" cy="5" r="5" fill-opacity="0" fill="#fff">
						<animate attributeName="fill-opacity"
								 begin="0s" dur="1.3s"
								 values="0;0;0;0;0;0;0;1" calcMode="linear"
								 repeatCount="indefinite" />
					</circle>
				</g>
			</g>
		</svg>
	</div>
</div>-->

<!-- ... end Preloader -->


<!-- Main Header -->

<nav id="navigation" class="site-header navigation navigation-justified header--sticky">
	<div class="container">
		<div class="navigation-header">
			<div class="navigation-logo">
				<a href="index.html">


					<img loading="lazy" src="img/demo-content/logo-white.png" alt="logo">

				</a>
			</div>
			<div class="navigation-button-toggler">
				<i class="hamburger-icon"></i>
			</div>
		</div>
		<div class="navigation-body">
			<div class="navigation-body-header">
				<div class="navigation-logo">
					<a href="index.html">


						<img loading="lazy" src="img/demo-content/logo-white.png" alt="logo">

					</a>
				</div>
				<span class="navigation-body-close-button">&#10005;</span>
			</div>
			<ul class="navigation-menu">
				<li class="navigation-item is-active">
					<a class="navigation-link" href="#">Hosting</a>
					<div class="navigation-megamenu">
						<div class="navigation-megamenu-container">
							<div class="navigation-row">
								<div class="navigation-col">
									<a href="02_wp_host.html" class="navigation-hosting-item border-primary-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="img/demo-content/navigation-hostings/hosting1.png" alt="hosting">

										WordPress Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="03_shared_host.html" class="navigation-hosting-item border-red-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="img/demo-content/navigation-hostings/hosting2.png" alt="hosting">

										Shared Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="04_vps_host.html" class="navigation-hosting-item border-orange-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="img/demo-content/navigation-hostings/hosting3.png" alt="hosting">

										VPS Hosting
									</a>
								</div>
								<div class="navigation-col">
									<a href="05_dedicated_server.html" class="navigation-hosting-item border-yellow-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="img/demo-content/navigation-hostings/hosting4.png" alt="hosting">

										Dedicated Server
									</a>
								</div>
								<div class="navigation-col">
									<a href="06_cloud_hosting.html" class="navigation-hosting-item border-blue-themes">


										<img class="navigation-hosting-item-img " loading="lazy" src="img/demo-content/navigation-hostings/hosting5.png" alt="hosting">

										Cloud Hosting
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="navigation-item">
					<a class="navigation-link" href="#">Domain</a>
					<ul class="navigation-dropdown">
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="07_domains.html">Domains</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="08_domain_checking.html">Domain Checking</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="#">
								Status Pages
								<span class="submenu-indicator"></span>
							</a>
							<ul class="navigation-dropdown">
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="18_status_page.html">Status Page</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="19_incident_history.html">Incident History</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="20_operational.html">Operational</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="21_degraded_performance.html">Degraded Performance</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="22_planned_maintenance.html">Planned Maintenance</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="23_subscribe_pop_up.html">Subscribe Popup</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="navigation-item">
					<a class="navigation-link" href="#">Pages</a>
					<div class="navigation-megamenu navigation-megamenu-half">
						<div class="navigation-megamenu-container">
							<div class="navigation-row">
								<div class="navigation-col">
									<ul class="navigation-list">
										<li class="navigation-list-heading">
											Standard Pages
											<span class="navigation-list-subheading">Pages that every website needs.</span>
										</li>
										<li><a href="09_about.html">About Us</a></li>
										<li><a href="25_testimonials.html">Testimonials</a></li>
										<li><a href="27_pricing_tables.html">Pricing Packages</a></li>
										<li><a href="18_status_page.html">Status Page</a></li>
										<li><a href="16_blog_details.html">Post Details</a></li>
										<li><a href="24_error.html">Error 404</a></li>
									</ul>
								</div>
								<div class="navigation-col">
									<ul class="navigation-list">
										<li class="navigation-list-heading">
											Web Elements
											<span class="navigation-list-subheading">Awesome header and title style variations and many more.</span>
										</li>
										<li><a href="31_typography.html">Typography</a></li>
										<li><a href="26_tabs_and_accordions.html">Tabs & Accordions</a></li>
										<li><a href="30_tables.html">Tables</a></li>
										<li><a href="28_infographic.html">Infographic</a></li>
										<li><a href="32_buttons.html">Buttons</a></li>
										<li><a href="29_forms.html">Forms</a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="navigation-item">
					<a class="navigation-link" href="#">
						Support
					</a>
					<ul class="navigation-dropdown">
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="14_submit_a_request.html">Submit a Request</a>
						</li>
						<li class="navigation-dropdown-item">
							<a class="navigation-dropdown-link" href="#">
								Knowledge Base
								<span class="submenu-indicator"></span>
							</a>
							<ul class="navigation-dropdown">
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="10_knowledge_base.html">Getting Started</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="11_knowledge_base_domains.html">Hosting</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="#">
										Domains
										<span class="submenu-indicator submenu-indicator-left"></span>
									</a>
									<ul class="navigation-dropdown navigation-dropdown-left">
										<li class="navigation-dropdown-item">
											<a class="navigation-dropdown-link" href="#">Vue</a>
										</li>
										<li class="navigation-dropdown-item">
											<a class="navigation-dropdown-link" href="#">React</a>
										</li>
										<li class="navigation-dropdown-item">
											<a class="navigation-dropdown-link" href="#">Ember</a>
										</li>
										<li class="navigation-dropdown-item">
											<a class="navigation-dropdown-link" href="#">
												Angular
												<span class="submenu-indicator submenu-indicator-left"></span>
											</a>
											<ul class="navigation-dropdown navigation-dropdown-left">
												<li class="navigation-dropdown-item">
													<a class="navigation-dropdown-link" href="#">Angular</a>
												</li>
												<li class="navigation-dropdown-item">
													<a class="navigation-dropdown-link" href="#">Angular 2</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="12_knowledge_base_domain_articles.html">General</a>
								</li>
								<li class="navigation-dropdown-item">
									<a class="navigation-dropdown-link" href="13_knowledge_base_domain_article_details.html">Articles</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="navigation-item">
					<a class="navigation-link" href="15_blog.html">Blog</a>
				</li>
				<li class="navigation-item">
					<a class="navigation-link" href="17_contacts.html">Contacts</a>
				</li>
			</ul>
			<div class="navigation-body-section navigation-additional-menu">
				<a href="#" class="crumina-button button--green button--xs">Trial Period</a>
				<div class="navigation-search">
					<div class="link-modal-popup" data-toggle="modal" data-target="#popupSearch"></div>
					<svg class="crumina-icon">
						<use xlink:href="#icon-search"></use>
					</svg>
				</div>
				<div class="navigation-user-menu">
					<div class="link-modal-popup" data-toggle="modal" data-target="#userMenuPopup"></div>
					<svg class="crumina-icon">
						<use xlink:href="#icon-user-menu"></use>
					</svg>
				</div>
			</div>
		</div>
	</div>
</nav>

<!-- ... end Main Header -->


<!-- Popup Search -->

<div class="modal fade window-popup popup-search" id="popupSearch" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="navigation-search-popup">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
								<h2 class="fw-medium text-white">WHAT ARE YOU LOOKING FOR?</h2>
								<form class="search-popup-form">
									<div class="input-btn--inline">
										<input class="input--dark" type="text" placeholder="Choose your new web address…">
										<button type="button" class="crumina-button button--primary button--l">SEARCH</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Popup Search -->


<!-- User Menu Popup -->

<div class="modal fade window-popup user-menu-popup" id="userMenuPopup" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="modal-close-btn-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
								<svg class="crumina-icon">
									<use xlink:href="#icon-close"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="user-menu">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
								<a href="index.html" class="site-logo">


									<img loading="lazy" src="img/demo-content/logo-colored.png" alt="logo" width="185">

								</a>
								<p class="fw-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<form class="sign-in-form">
									<h6 class="text-white">SIGN IN TO YOUR ACCOUNT</h6>
									<div class="form-item">
										<input class="input--dark input--squared" type="text" placeholder="Username or email">
									</div>
									<div class="form-item">
										<input class="input--dark input--squared" type="password" placeholder="Password">
									</div>
									<div class="form-item">
										<div class="remember-wrapper text-white">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="optionsCheckboxes4">

													Remember Me
												</label>
											</div>
											<a href="#">Lost your password?</a>
										</div>
									</div>
									<div class="form-item">
										<button type="button" class="crumina-button button--primary button--l w-100">Sign In</button>
									</div>
								</form>

								<p class="text-white fw-medium">Sign In with social networks:</p>
								<ul class="socials">
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/facebook.png" alt="facebook">

										</a>
									</li>
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/twitter.png" alt="twitter">

										</a>
									</li>
									<li>
										<a href="#">


											<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/google.png" alt="google">

										</a>
									</li>
								</ul>

								<button type="button" class="crumina-button button--grey button--l button--bordered w-100">CREATE AN ACCOUNT</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end User Menu Popup -->


<div class="main-content-wrapper">

	<section class="crumina-module crumina-module-slider crumina-main-slider">
		<!--Prev next buttons-->

		<div class="swiper-btn-prev">
			<svg class="crumina-icon">
				<use xlink:href="#icon-prev"></use>
			</svg>
		</div>

		<div class="swiper-btn-next">
			<svg class="crumina-icon">
				<use xlink:href="#icon-next"></use>
			</svg>
		</div>

		<div class="swiper-container" data-effect="fade" data-show-items="1" data-change-handler="thumbsParent" data-prev-next="1" data-autoplay="4000">

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide stunning-header-bg2">

					<div class="container">
						<div class="row">
							<div class="col-lg-12">

								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">FAST WORDPRESS HOSTING FOR EVERYBODY</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

									<div class="universal-btn-wrapper">
										<a href="02_wp_host.html" class="crumina-button button--blue button--l">LEARN MORE</a>
										<a href="27_pricing_tables.html" class="crumina-button button--red button--l">BUY IT NOW</a>
									</div>

								</div>

								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider1.png" alt="slider">
									<div class="swiper-lazy-preloader"></div>
								</div>

							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg3">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">SHARED HOSTING THAT SUPPORT YOUR GOAL</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Imperdiet massa tincidunt nunc pulvinar. Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>

									<div class="universal-btn-wrapper">
										<a href="03_shared_host.html" class="crumina-button button--blue button--l">LEARN MORE</a>
										<a href="27_pricing_tables.html" class="crumina-button button--red button--l">BUY IT NOW</a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider2.png" alt="slider">
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg4">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider3.png" alt="slider">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">VPS HOSTING FOR SPEED AND EASE OF USE</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Diam quis enim lobortis scelerisque. Vitae tempus quam pellentesque nec nam aliquam sem. Feugiat scelerisque varius morbi enim nunc faucibus donec massa sapien faucibus.</p>

									<div class="universal-btn-wrapper">
										<a href="03_shared_host.html" class="crumina-button button--orange button--l">LEARN MORE</a>
										<a href="27_pricing_tables.html" class="crumina-button button--dark button--l">BUY IT NOW</a>
									</div>

								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg5">

					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">

								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">DEDICATED SERVER AND POWERFUL COMPUTING RESOURCES</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

									<div class="universal-btn-wrapper">
										<a href="05_dedicated_server.html" class="crumina-button button--dark button--l">LEARN MORE</a>
										<a href="27_pricing_tables.html" class="crumina-button button--yellow button--l">BUY IT NOW</a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider4.png" alt="slider">
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg6">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">THE BEST CLOUD HOSTING PROVIDERS</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Imperdiet massa tincidunt nunc pulvinar. Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>

									<div class="universal-btn-wrapper">
										<a href="03_shared_host.html" class="crumina-button button--blue button--l">LEARN MORE</a>
										<a href="27_pricing_tables.html" class="crumina-button button--lime button--l">BUY IT NOW</a>
									</div>

								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider5.png" alt="slider">
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="swiper-slide stunning-header-bg7">

					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
								<div class="slider-thumb" data-swiper-parallax="-400" data-swiper-parallax-duration="600">
									<img class="swiper-lazy" src="img/demo-content/images/slider6.png" alt="slider">
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 align-left">
								<div class="slider-content">

									<h2 class="slider-content-title" data-swiper-parallax="-100">FIND AND REGISTER YOUR PERFECT DOMAIN NAME</h2>

									<p class="slider-content-text" data-swiper-parallax="-200">Imperdiet massa tincidunt nunc pulvinar. Volutpat est velit egestas dui id ornare arcu odio ut. Gravida in fermentum et sollicitudin ac orci. Massa ultricies mi quis hendrerit.</p>

									<div class="universal-btn-wrapper">
										<a href="03_shared_host.html" class="crumina-button button--dark button--l">DOMAIN NAME SEARCH</a>
										<a href="27_pricing_tables.html" class="crumina-button button--orange button--l">LEARN MORE</a>
									</div>

								</div>
							</div>

						</div>
					</div>

				</div>

			</div>

			<!--Pagination tabs-->

			<div class="slider-slides">
				<div class="container">
					<div class="row">
						<div class="slider-slides-wrap">
							<div class="slides-item slides-item-primary swiper-slide-active">
								<span class="slides-item-text">WordPress Hosting</span>
							</div>
							<div class="slides-item slides-item-red">
								<span class="slides-item-text">Shared Hosting</span>
							</div>
							<div class="slides-item slides-item-orange">
								<span class="slides-item-text">VPS Hosting</span>
							</div>
							<div class="slides-item slides-item-yellow">
								<span class="slides-item-text">Dedicated Server</span>
							</div>
							<div class="slides-item slides-item-blue">
								<span class="slides-item-text">Cloud Hosting</span>
							</div>
							<div class="slides-item slides-item-lime">
								<span class="slides-item-text">Domains</span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>

	<section class="medium-section-padding bg-grey">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<h4>It all starts with a domain name</h4>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<form>
						<div class="input-btn--inline">
							<input class="input--white" type="email" placeholder="Domain name">
							<button type="button" class="crumina-button button--primary button--l">SEARCH</button>
						</div>
					</form>
					<div class="domain-list mt-4">
						<div class="domain-list-item">
							<div class="domain-list-item-name c-blue-dark"><span class="c-blue">.</span>com</div>
							<div class="domain-list-item-price">$12.95</div>
						</div>
						<div class="domain-list-item">
							<div class="domain-list-item-name c-dark"><span class="c-yellow">.</span>net</div>
							<div class="domain-list-item-price">$16.58</div>
						</div>
						<div class="domain-list-item">
							<div class="domain-list-item-name c-orange"><span class="c-dark">.</span>info</div>
							<div class="domain-list-item-price">$4.99</div>
						</div>
						<div class="domain-list-item">
							<div class="domain-list-item-name c-light-grey"><span class="c-lime">.</span>store</div>
							<div class="domain-list-item-price">$65.00</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 align-center mr-auto ml-auto mb-5">
					<h2>POWERFUL HOSTING SERVICES</h2>
					<p class="fs-18 fw-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title">Ultimate Speed</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="img/demo-content/icons/info-icon36.png" alt="icon">

						</div>

						<div class="info-box-content">
							<p class="info-box-text">Sollicitudin ac orci phasellus egestas. Urna nunc id cursus metus aliquam eleifend. Neque vitae tempus quam pellentesque. Volutpat odio facilisis mauris sit amet massa vitae.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title">100% Uptime</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="img/demo-content/icons/info-icon37.png" alt="icon">

						</div>

						<div class="info-box-content">
							<p class="info-box-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="crumina-module crumina-info-box info-box--icon-scaled">

						<h5 class="info-box-title">Money-back Guarantee</h5>

						<div class="info-box-thumb">


							<img loading="lazy" src="img/demo-content/icons/info-icon38.png" alt="icon">

						</div>

						<div class="info-box-content">
							<p class="info-box-text">Nisl rhoncus mattis rhoncus urna neque viverra justo nec. Dolor magna eget est lorem ipsum. Turpis egestas integer eget aliquet. Vitae semper quis lectus nulla at volutpat diam. </p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding bg-yellow-themes">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<h2>WHY GO WITH HOSTSIGHT</h2>
					<p class="fs-18 fw-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
					<div class="accordion crumina-module crumina-accordion accordion--style1 mt-5" id="accordion1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Award-winning support
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h2 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										The vision for our mission
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h2 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										All in one place
										<span class="icons">
											<svg class="crumina-icon icon-plus"><use xlink:href="#icon-plus"></use></svg>
											<svg class="crumina-icon active icon-minus"><use xlink:href="#icon-minus"></use></svg>
										</span>
									</button>
								</h2>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
								<div class="card-body">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim metus aliquam eleifend.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


					<img loading="lazy" src="img/demo-content/images/image15.png" alt="hostsight">

				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding stunning-header-bg13">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-center mb-5">
					<h2 class="text-white">DATA CENTER LOCATIONS</h2>
					<p class="fs-18 fw-medium c-light-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
					<div class="crumina-module crumina-location-servers">
						<div class="location-servers-map">


							<img loading="lazy" src="img/theme-content/images/map-dark.png" alt="map">

							<span class="location-server-item location-server-item-border-dark bg-accent-primary" style="top: 19%; left: 50%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>GERMAN SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-yellow-themes" style="top: 13%; left: 15%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>CANADA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-orange-themes" style="top: 24%; left: 18%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>USA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-red-themes" style="top: 28%; left: 11%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>USA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-accent-primary" style="top: 60%; left: 22%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>ARGENTINA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-blue-themes" style="top: 74%; left: 27%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>BRAZIL SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-red-themes" style="top: 41%; left: 46%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>UGANDA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-orange-themes" style="top: 61%; left: 54%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>ZAMBIA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-yellow-themes" style="top: 10%; left: 69%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>IRKUTSK SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-blue-themes" style="top: 25%; left: 63%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>ISRAEL SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-red-themes" style="top: 14%; left: 79%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>ARCHANGELSK SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
							<span class="location-server-item location-server-item-border-dark bg-yellow-themes" style="top: 76%; left: 87%;" data-toggle="tooltip" data-placement="left" data-html="true" title="<span class='font-weight-bold'>AUSTRALIA SERVER</span> </br>Dolor in reprehenderit in voluptate velit esse cillum dolore eu.."></span>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto">
					<div class="locations-servers-list">
						<div class="locations-server-item">North America <span class="count">(36)</span></div>
						<div class="locations-server-item">South America <span class="count">(42)</span></div>
						<div class="locations-server-item">Europe <span class="count">(42)</span></div>
						<div class="locations-server-item">Australia <span class="count">(26)</span></div>
						<div class="locations-server-item">Asia <span class="count">(42)</span></div>
						<div class="locations-server-item">Africa <span class="count">(42)</span></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pt120">
		<div class="container">
			<div class="row mb-5 align-items-end">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2>HOSTING FOR EVERYBODY AND EVERY BUDGET</h2>
					<p class="fs-18 fw-medium">Purus gravida quis blandit turpis cursus in hac. Sollicitudin aliquam ultrices sagittis orci a scelerisque. Quisque egestas diam in arcu cursus euismod. Lectus urna duis convallis convallis tellus. Sagittis orci a scelerisque purus semper eget.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 align-right">
					<a href="" class="crumina-button button--green button--l button--bordered">FREE TRIAL PERIOD</a>
				</div>
			</div>
		</div>
		<div class="pricing-tables-border-bottom-wrap">
			<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-border-bottom pricing-primary">

				<div class="main-pricing-content">

					<div class="pricing-thumb">


						<img loading="lazy" src="img/demo-content/pricing/pricing1.png" alt="Server">

					</div>

					<h5 class="pricing-title">WordPress Hosting</h5>

					<p class="pricing-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<h5 class="rate">Starting at<span class="price" data-annually="59.99/y" data-monthly="5.99/mo">5.99/mo</span>
					</h5>

					<a href="02_wp_host.html" class="pricing-link">
						<svg class="crumina-icon">
							<use xlink:href="#icon-arrow-right"></use>
						</svg>
					</a>
				</div>

				<div class="bg-layer"></div>
			</div>
			<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-border-bottom pricing-red">

				<div class="main-pricing-content">

					<div class="pricing-thumb">


						<img loading="lazy" src="img/demo-content/pricing/pricing2.png" alt="Server">

					</div>

					<h5 class="pricing-title">Shared Hosting</h5>

					<p class="pricing-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<h5 class="rate">Starting at<span class="price" data-annually="27.99/y" data-monthly="2.79/mo">2.79/mo</span>
					</h5>

					<a href="03_shared_host.html" class="pricing-link">
						<svg class="crumina-icon">
							<use xlink:href="#icon-arrow-right"></use>
						</svg>
					</a>
				</div>

				<div class="bg-layer"></div>
			</div>
			<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-border-bottom pricing-orange">

				<div class="main-pricing-content">

					<div class="pricing-thumb">


						<img loading="lazy" src="img/demo-content/pricing/pricing3.png" alt="Server">

					</div>

					<h5 class="pricing-title">VPS Hosting</h5>

					<p class="pricing-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<h5 class="rate">Starting at<span class="price" data-annually="199.99/y" data-monthly="19.99/mo">19.99/mo</span>
					</h5>

					<a href="04_vps_host.html" class="pricing-link">
						<svg class="crumina-icon">
							<use xlink:href="#icon-arrow-right"></use>
						</svg>
					</a>
				</div>

				<div class="bg-layer"></div>
			</div>
			<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-border-bottom pricing-yellow">

				<div class="main-pricing-content">

					<div class="pricing-thumb">


						<img loading="lazy" src="img/demo-content/pricing/pricing4.png" alt="Server">

					</div>

					<h5 class="pricing-title">Dedicated Server</h5>

					<p class="pricing-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<h5 class="rate">Starting at<span class="price" data-annually="899.99/y" data-monthly="89.99/mo">89.99/mo</span>
					</h5>

					<a href="05_dedicated_server.html" class="pricing-link">
						<svg class="crumina-icon">
							<use xlink:href="#icon-arrow-right"></use>
						</svg>
					</a>
				</div>

				<div class="bg-layer"></div>
			</div>
			<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-border-bottom pricing-blue">

				<div class="main-pricing-content">

					<div class="pricing-thumb">


						<img loading="lazy" src="img/demo-content/pricing/pricing5.png" alt="Server">

					</div>

					<h5 class="pricing-title">Cloud Hosting</h5>

					<p class="pricing-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

					<h5 class="rate">Starting at<span class="price" data-annually="899.99/y" data-monthly="89.99/mo">89.99/mo</span>
					</h5>

					<a href="06_cloud_hosting.html" class="pricing-link">
						<svg class="crumina-icon">
							<use xlink:href="#icon-arrow-right"></use>
						</svg>
					</a>
				</div>
				<div class="bg-layer"></div>
			</div>
		</div>
	</section>

	<section class="large-section-padding">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4 mb-md-0">


					<img loading="lazy" src="img/demo-content/images/image16.png" alt="Domain Name">

				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>IT ALL STARTS WITH A DOMAIN NAME</h2>
					<h5 class="weight-normal">Find a great domain</h5>
					<p>Viverra aliquet eget sit amet tellus cras adipiscing. Nunc lobortis mattis aliquam faucibus purus in. Sem nulla pharetra diam sit. At lectus urna duis convallis convallis tellus id interdum velit sagittis aliquam.</p>
					<div class="row my-4">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<ul class="list--standard list--icon-primary">
								<li>
									<svg class="crumina-icon">
										<use xlink:href="#icon-single-arrow"></use>
									</svg>
									<a href="#">Viverra aliquet eget sit amet</a>
								</li>
								<li>
									<svg class="crumina-icon">
										<use xlink:href="#icon-single-arrow"></use>
									</svg>
									<a href="#">Nunc lobortis mattis</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<ul class="list--standard list--icon-primary">
								<li>
									<svg class="crumina-icon">
										<use xlink:href="#icon-single-arrow"></use>
									</svg>
									<a href="#">Sem nulla pharetra diam</a>
								</li>
								<li>
									<svg class="crumina-icon">
										<use xlink:href="#icon-single-arrow"></use>
									</svg>
									<a href="#">At lectus urna duis convallis</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="universal-btn-wrapper">
						<a href="#" class="crumina-button button--lime button--l">SEARCH DOMAIN</a>
						<a href="13_knowledge_base_domain_article_details.html" class="crumina-button button--primary button--l">TRANSFER DOMAIN</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding section-bg2">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 m-auto align-center">
					<h2>WHAT OUR CLIENTS SAY ABOUT US</h2>
					<h6 class="fw-medium fs-18 text-white">Purus gravida quis blandit turpis cursus in hac. Sollicitudin aliquam ultrices sagittis orci a scelerisque.</h6>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
					<div class="crumina-module crumina-module-slider crumina-slider--testimonial navigation-bottom-center pagination-bottom-center">

						<div class="swiper-btn-prev swiper-btn-white">
							<svg class="crumina-icon icon-line-arrow-left">
								<use xlink:href="#icon-arrow-left"></use>
							</svg>
						</div>

						<div class="swiper-btn-next swiper-btn-white">
							<svg class="crumina-icon icon-line-arrow-right">
								<use xlink:href="#icon-arrow-right"></use>
							</svg>
						</div>

						<div class="swiper-container" data-show-items="2" data-prev-next="1">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="crumina-module crumina-testimonial-item testimonial--author-bottom">
										<div class="testimonial-content">
											<h6 class="testimonial-text">
												Quisque egestas diam in arcu cursus euismod. Lectus urna duis convallis
												convallis tellus. Sagittis orci a scelerisque purus turpis cursus.
											</h6>
										</div>
										<div class="author-content-wrap">
											<div class="avatar">
												<img loading="lazy" src="img/demo-content/avatars/author2.png" alt="avatar">
											</div>
											<div class="author-content">
												<a href="#" class="author-name h6">Jonathan Simpson</a>
												<div class="author-company">Envato Market</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-testimonial-item testimonial--author-bottom">
										<div class="testimonial-content">
											<h6 class="testimonial-text">
												Purus gravida quis blandit turpis cursus in hac. Sollicitudin aliquam
												ultrices sagittis orci a scelerisque. Quisque egestas diam in arcu
												cursus euismod. Lectus urna duis convallis convallis tellus. Sagittis orci a scelerisque purus.
											</h6>
										</div>
										<div class="author-content-wrap">
											<div class="avatar">
												<img loading="lazy" src="img/demo-content/avatars/author1.png" alt="avatar">
											</div>
											<div class="author-content">
												<a href="#" class="author-name h6">Jonathan Simpson</a>
												<div class="author-company">Envato Market</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-testimonial-item testimonial--author-bottom">
										<div class="testimonial-content">
											<h6 class="testimonial-text">
												Quisque egestas diam in arcu cursus euismod. Lectus urna duis convallis
												convallis tellus. Sagittis orci a scelerisque purus turpis cursus.
											</h6>
										</div>
										<div class="author-content-wrap">
											<div class="avatar">
												<img loading="lazy" src="img/demo-content/avatars/author2.png" alt="avatar">
											</div>
											<div class="author-content">
												<a href="#" class="author-name h6">Jonathan Simpson</a>
												<div class="author-company">Envato Market</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- If we need pagination -->
						<div class="swiper-pagination swiper-pagination-white"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="medium-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="client-items-wrapper">
						<a href="#" class="crumina-module clients-item">


							<img loading="lazy" src="img/demo-content/avatars/clients1.png" alt="Client">

						</a>
						<a href="#" class="crumina-module clients-item">


							<img loading="lazy" src="img/demo-content/avatars/clients3.png" alt="Client">

						</a>
						<a href="#" class="crumina-module clients-item">


							<img loading="lazy" src="img/demo-content/avatars/clients2.png" alt="Client">

						</a>
						<a href="#" class="crumina-module clients-item">


							<img loading="lazy" src="img/demo-content/avatars/clients4.png" alt="Client">

						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="large-section-padding">
		<div class="container">
			<div class="row mb-5 align-center justify-content-center">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<h2>LATEST FROM THE BLOG</h2>
					<p class="fs-18 fw-medium">Quisque egestas diam in arcu cursus euismod. Lectus urna duis convallis convallis tellus. Sagittis orci a scelerisque purus semper eget.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard has-post-thumbnail">

						<div class="post-thumb">
							<img loading="lazy" src="img/demo-content/blog/blog1.jpg" alt="Technology">
						</div>

						<div class="post-content">

							<div class="post-category-wrap">
								<a href="#" class="post-category">Technology</a>,
								<a href="#" class="post-category">SEO Optimization</a>
							</div>

							<a href="16_blog_details.html" class="post-title h6">Standard Post Format with Featured Image</a>

							<div class="post-text">
								<p>Penatibus et magnis dis parturient montes nascetur ridiculus mus uisque egestas.</p>
							</div>

							<div class="post-additional-info">

								<div class="author-posted">
									Posted by
									<a href="#" class="author">Liondekam</a>
								</div>

							</div>

						</div>

					</article>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard link">
						<a href="https://seosight.crumina.net/" class="post-content">


							<img class="link-image " loading="lazy" src="img/theme-content/images/link.png" alt="Link">

							<h4 class="post-title entry-title">Seosight - SEO, Digital Marketing Agency WP Theme with Shop</h4>
							<div class="site-link">seosight.crumina.net</div>
						</a>
					</article>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb30">
					<article class="entry post post-standard has-post-thumbnail advertising">

						<div class="post-category-wrap">
							<a href="16_blog_details.html" class="post-category">Advertising</a>
						</div>

						<div class="post-thumb">


							<img loading="lazy" src="img/demo-content/blog/blog3.png" alt="Technology">

						</div>

						<div class="post-content">

							<a href="16_blog_details.html" class="post-title h6">Complete Hosting Solutions Only
								<span class="c-blue">$2.95/month</span>*</a>
							<a href="25_testimonials.html" class="crumina-button button--primary button--l">TRY NOW FOR FREE</a>

						</div>

					</article>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 align-center">
					<a href="15_blog.html" class="crumina-button button--dark button--l">READ BLOG</a>
				</div>
			</div>
		</div>
	</section>

	<section class="pb120">
		<div class="container">
			<div class="row tabs tabs--style7">
				<div class="block-border-linear-gradient">
					<div class="block-border-linear-gradient-top"></div>
					<div class="block-border-linear-gradient-right"></div>
					<div class="block-border-linear-gradient-bottom"></div>
					<div class="block-border-linear-gradient-left"></div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="nav nav-tabs" id="myTab7" role="tablist">

						<a class="nav-item nav-link active" id="domains-tab" data-toggle="tab" href="#domains" role="tab" aria-controls="domains" aria-selected="true">
							Domains
						</a>

						<a class="nav-item nav-link" id="web-hosting-tab" data-toggle="tab" href="#web-hosting" role="tab" aria-controls="web-hosting" aria-selected="false">
							Web Hosting
						</a>

						<a class="nav-item nav-link" id="dedicated-server-tab" data-toggle="tab" href="#dedicated-server" role="tab" aria-controls="dedicated-server" aria-selected="false">
							Dedicated Server
						</a>

					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="tab-content" id="myTabContent7">
						<div class="tab-pane fade show active" id="domains" role="tabpanel" aria-labelledby="domains-tab">
							<h5 class="mb-2">Which domain should I buy?</h5>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								<a href="#" class="weight-bold c-primary">Cras fermentum odio eu feugiat.</a> Aliquet lectus proin nibh nisl condimentum id. Viverra nibh cras pulvinar mattis nunc.
							</p>
							<h5 class="mb-2">What are some tips when choosing a name?</h5>
							<p class="mb-4">Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam. Facilisis sed odio morbi quis. Odio facilisis mauris sit amet massa vitae tortor.</p>
							<h5 class="mb-2">How do I choose a domain that stands out?</h5>
							<p>Nec dui nunc mattis enim. In mollis nunc sed id. Blandit libero volutpat sed cras ornare arcu dui vivamus. Lacus laoreet non curabitur gravida. Etiam sit amet nisl
								<span class="weight-bold">purus in mollis.</span> Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Iaculis nunc sed augue lacus.
							</p>
							<p class="mb-4">Tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<h5 class="mb-2">What if I need help choosing the right domain?</h5>
							<p>Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam.
								<a href="#" class="c-primary">Facilisis sed odio morbi quis.</a> Odio facilisis mauris sit amet massa vitae tortor.
							</p>
							<a href="#" class="crumina-button button--lime button--l mt-2">Find Your Domain</a>
						</div>

						<div class="tab-pane fade" id="web-hosting" role="tabpanel" aria-labelledby="web-hosting-tab">
							<h5 class="mb-2">Which domain should I buy?</h5>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								<a href="#" class="weight-bold c-primary">Cras fermentum odio eu feugiat.</a> Aliquet lectus proin nibh nisl condimentum id. Viverra nibh cras pulvinar mattis nunc.
							</p>
							<h5 class="mb-2">What are some tips when choosing a name?</h5>
							<p class="mb-4">Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam. Facilisis sed odio morbi quis. Odio facilisis mauris sit amet massa vitae tortor.</p>
							<h5 class="mb-2">How do I choose a domain that stands out?</h5>
							<p>Nec dui nunc mattis enim. In mollis nunc sed id. Blandit libero volutpat sed cras ornare arcu dui vivamus. Lacus laoreet non curabitur gravida. Etiam sit amet nisl
								<span class="weight-bold">purus in mollis.</span> Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Iaculis nunc sed augue lacus.
							</p>
							<p class="mb-4">Tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<h5 class="mb-2">What if I need help choosing the right domain?</h5>
							<p>Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam.
								<a href="#" class="c-primary">Facilisis sed odio morbi quis.</a> Odio facilisis mauris sit amet massa vitae tortor.
							</p>
							<a href="#" class="crumina-button button--lime button--l mt-2">FIND YOUR DOMAIN</a>
						</div>

						<div class="tab-pane fade" id="dedicated-server" role="tabpanel" aria-labelledby="dedicated-server-tab">
							<h5 class="mb-2">Which domain should I buy?</h5>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								<a href="#" class="weight-bold c-primary">Cras fermentum odio eu feugiat.</a> Aliquet lectus proin nibh nisl condimentum id. Viverra nibh cras pulvinar mattis nunc.
							</p>
							<h5 class="mb-2">What are some tips when choosing a name?</h5>
							<p class="mb-4">Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam. Facilisis sed odio morbi quis. Odio facilisis mauris sit amet massa vitae tortor.</p>
							<h5 class="mb-2">How do I choose a domain that stands out?</h5>
							<p>Nec dui nunc mattis enim. In mollis nunc sed id. Blandit libero volutpat sed cras ornare arcu dui vivamus. Lacus laoreet non curabitur gravida. Etiam sit amet nisl
								<span class="weight-bold">purus in mollis.</span> Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Iaculis nunc sed augue lacus.
							</p>
							<p class="mb-4">Tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<h5 class="mb-2">What if I need help choosing the right domain?</h5>
							<p>Sit amet nulla facilisi morbi tempus iaculis. Magna fermentum iaculis eu non diam.
								<a href="#" class="c-primary">Facilisis sed odio morbi quis.</a> Odio facilisis mauris sit amet massa vitae tortor.
							</p>
							<a href="#" class="crumina-button button--lime button--l mt-2">FIND YOUR DOMAIN</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="small-section-padding bg-accent-primary">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 mb-4 mb-md-0">
					<h5 class="mb-0 text-white">Complete Hosting Solutions Only<span class="c-blue"> $2.95/month</span>*
					</h5>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<a href="02_wp_host.html" class="crumina-button button--blue button--m">TRY NOW FOR FREE</a>
				</div>
			</div>
		</div>
	</section>

</div>


<!-- Footer -->

<footer id="site-footer" class="footer footer--dark footer--with-decoration">

	<div class="footer-content">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Hosting
						</h5>
						<ul>
							<li>
								<a href="02_wp_host.html">
									WordPress Hosting
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="03_shared_host.html">
									Shared Hosting
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="04_vps_host.html">
									VPS Hosting
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="05_dedicated_server.html">
									Dedicated Server
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="06_cloud_hosting.html">
									Cloud Hosting
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Domains
						</h5>
						<ul>
							<li>
								<a href="07_domains.html">
									Register Domains
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="08_domain_checking.html">
									Transfer Domains
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="18_status_page.html">
									Manage Domains
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<div class="widget widget_links">
						<h5 class="widget-title">
							Company
						</h5>
						<ul>
							<li>
								<a href="09_about.html">
									About Us
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="10_knowledge_base.html">
									Support
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="15_blog.html">
									Blog
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
							<li>
								<a href="17_contacts.html">
									Contacts
									<svg class="crumina-icon">
										<use xlink:href="#icon-triangle-arrow"></use>
									</svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<div class="widget w-info">
						<a href="index.html" class="site-logo">


							<img loading="lazy" src="img/demo-content/logo-white.png" alt="logo" width="185">

						</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						<ul class="socials">
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/facebook.png" alt="facebook">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/twitter.png" alt="twitter">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/google.png" alt="google">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/youtube.png" alt="youtube">

								</a>
							</li>
							<li>
								<a href="#">


									<img class="crumina-icon " loading="lazy" src="img/theme-content/social-icons/rss.png" alt="rss">

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-subscribe-panel">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<h5 class="footer-subscribe-panel-title text-white">SUBSCRIBE TO OUR NEWSLETTER</h5>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-4 mb-lg-0">
					<span class="footer-subscribe-panel-subtitle"><span class="font-weight-bold">Join Our Newsletter & Marketing Communication.</span> We'll send you news and offers.</span>
				</div>
				<div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mb-0 mb-lg-0">
					<form class="footer-subscribe-form">
						<div class="input-btn--inline">
							<input class="input--dark" type="text" placeholder="Choose your new web address…">
							<button type="button" class="crumina-button button--lime button--l">SEARCH</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="sub-footer bg-black">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-0 mb-lg-0">
					<div class="copyright">
						<span>Copyright © 2019 <a href="index.html">Hostsight</a>, Designed by <a href="https://themeforest.net/user/themefire/portfolio">themefire</a> Developed by <a href="https://crumina.net/">Crumina</a> Only on <a href="https://themeforest.net/">Envato Market</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a class="back-to-top" href="#">
		<svg class="crumina-icon">
			<use xlink:href="#icon-to-top"></use>
		</svg>
	</a>
</footer>

<!-- ... end Footer -->


<script src="js/jquery.min.js"></script>

<script src="js/Bootstrap/bootstrap.bundle.min.js"></script>

<script src="js/js-plugins/navigation.min.js"></script>
<!--<script src="js/js-plugins/select2.min.js"></script>-->
<script src="js/js-plugins/material.min.js"></script>
<script src="js/js-plugins/swiper.min.js"></script>
<!--<script src="js/js-plugins/jquery-countTo.min.js"></script>-->
<!--<script src="js/js-plugins/waypoints.min.js"></script>-->
<!--<script src="js/js-plugins/leaflet.min.js"></script>-->
<!--<script src="js/js-plugins/MarkerClusterGroup.min.js"></script>-->
<!--<script src="js/js-plugins/jquery.magnific-popup.min.js"></script>-->
<!--<script src="js/js-plugins/TimeCircles.min.js"></script>-->
<script src="js/js-plugins/smooth-scroll.min.js"></script>
<script src="js/js-plugins/jquery.matchHeight.min.js"></script>
<!--<script src="js/js-plugins/imagesLoaded.min.js"></script>-->
<!--<script src="js/js-plugins/isotope.pkgd.min.js"></script>-->
<!--<script src="js/js-plugins/ajax-pagination.min.js"></script>-->
<!--<script src="js/js-plugins/Chart.min.js"></script>-->
<!--<script src="js/js-plugins/chartjs-plugin-deferred.min.js"></script>-->


<script src="js/main.js"></script>
<!--<script src="js/js-plugins/leaflet-init.js"></script>-->

<!-- jQuery-scripts for Modules (Send Message) -->
<!--<script src="modules/forms/src/js/jquery.validate.min.js"></script>-->
<!--<script src="modules/forms/src/js/sweetalert2.all.js"></script>-->
<!--<script src="modules/forms/src/js/scripts.js"></script>-->

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>