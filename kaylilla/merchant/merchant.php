<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Kaylilla - Clean & Minimalist Mobile Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>

	<div id="main">

		<!-- LEFT SIDEBAR -->
		<?php include 'merchant_side_navbar.php';?>
		<!-- END LEFT SIDEBAR -->


		<!-- MAIN PAGE -->
		<!-- Class .fixed-navbar is set for .top-navbar & .content-container as floating navbar
		Put this class to make navbar fixed or remove this.
		-->
		<div id="page" class="fixed-navbar">

			<!-- FIXED Top Navbar -->
			<?php include 'merchant_top_navbar.php'; ?>
			<!-- End FIXED Top Navbar -->

			<!-- CONTENT CONTAINER -->
			<div class="content-container no-padding-top">

				<div class="home-widget header-account animated fadeInRight">

					<div class="container">
						<div class="row">
							<div class="col s12">

							<?php include 'profile_widget.php';?>

							</div><!-- .col s12 -->
						</div><!-- .row -->
					</div><!-- .container -->

				</div><!-- .home-widget header-account animated fadeInRight -->

				<div class="container">
					<div class="row no-mb">
						<div class="col s12">

							<div class="animated fadeInUp">

								<!-- Sales statistic card -->
								<div class="home-widget">
									<div class="widget-title">
										Deals statistic
									</div>

									<div class="home-cards">
										<div class="card-item cyan">
											<span class="numbers">
												<span class="count">87</span>
											</span>
											<span class="desc">Active Deals</span>
											<div class="icon">
												<span class="ti-bag"></span>
											</div>
										</div>
										<div class="card-item orange">
											<span class="numbers">
												<span class="count">1021</span>
											</span>
											<span class="desc">Complete Deals</span>
											<div class="icon">
												<span class="ti-wallet"></span>
											</div>
										</div>
										<div class="card-item lime">
											<span class="numbers">
												<span class="count">123</span>
											</span>
											<span class="desc">Drafted Deals</span>
											<div class="icon">
												<span class="ti-email"></span>
											</div>
										</div>
										<div class="card-item blue">
											<span class="numbers">
												<span class="count">14</span>
											</span>
											<span class="desc">Pending Deals</span>
											<div class="icon">
												<span class="ti-bell"></span>
											</div>
										</div>
									</div>
								</div><!-- .home-widget -->
								<!-- End Sales statistic card -->

								<!-- Event card -->
								<div class="home-widget">
									<div class="widget-title">
										My Upcoming Events
									</div>

									<div class="home-events">
										<div class="event-item no-padding-top">
											<div class="date">
												<div class="day">
													08
												</div>
												<div class="month">
													Aug
												</div>
											</div>
											<div class="event-caption">
												<h4 class="event-name">Polis grande of yui sansku karo me</h4>
												<div class="time"><span class="icon ti-time"></span>07PM - 09PM</div>
												<div class="location"><span class="icon ti-location-pin"></span>San Marina Bay, Singapore</div>
											</div>
										</div>
										<div class="event-item">
											<div class="date">
												<div class="day">
													12
												</div>
												<div class="month">
													Aug
												</div>
											</div>
											<div class="event-caption">
												<h4 class="event-name">In facilisis orci risus id quam, donec malesuada</h4>
												<div class="time"><span class="icon ti-time"></span>09AM - 02PM</div>
												<div class="location"><span class="icon ti-location-pin"></span>Mecaria convention centre</div>
											</div>
										</div>
										<div class="event-item">
											<div class="date">
												<div class="day">
													23
												</div>
												<div class="month">
													Sep
												</div>
											</div>
											<div class="event-caption">
												<h4 class="event-name">Vel semper Nam semper ligula quis eros rutrum non</h4>
												<div class="time"><span class="icon ti-time"></span>10AM - 12AM</div>
												<div class="location"><span class="icon ti-location-pin"></span>Boca boca assembly point</div>
											</div>
										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- End Event card -->

								<!-- Recent stories card -->
								<!-- <div class="home-widget no-mb">
									<div class="widget-title">
										Recent stories
									</div>

									<ul class="blog-small-list">
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-image_grey.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h2 class="entry-title">
													<a href="#!">Nulla aliquam tristique metus at sodales</a>
												</h2>
												<div class="entry-meta">
													<span class="meta">
														<span class="icon ti-time"></span> Jan 12, 2018
													</span>
													<span class="meta">
														<span class="icon ti-user"></span> admin
													</span>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-image_cyan.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h2 class="entry-title">
													<a href="#!">Vestibulum venenatis nec ex vel porttitor</a>
												</h2>
												<div class="entry-meta">
													<span class="meta">
														<span class="icon ti-time"></span> Jan 12, 2018
													</span>
													<span class="meta">
														<span class="icon ti-user"></span> admin
													</span>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-image_orange.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h2 class="entry-title">
													<a href="#!">Quisque id nisi id metus sagittis rhoncus</a>
												</h2>
												<div class="entry-meta">
													<span class="meta">
														<span class="icon ti-time"></span> Jan 12, 2018
													</span>
													<span class="meta">
														<span class="icon ti-user"></span> admin
													</span>
												</div>
											</div>
										</li>
									</ul>

								</div> --><!-- .home-widget -->
								<!-- End Recent stories card -->

							</div><!-- .animated fadeInUp -->

						</div><!-- .col s12 -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .content-container -->
			<!-- END CONTENT CONTAINER -->

		
			<!-- FOOTER -->
			<?php include '../include/footer.php';?>
			<!-- End FOOTER -->

			<!-- Back to top Link -->
			<div id="to-top" class="main-bg">
				<span class="ti-arrow-up"></span>
			</div> 

		</div>
		<!-- END MAIN PAGE -->

	</div><!-- #main -->

	<script src="../assets/plugins/jQuery/jquery-3.3.1.min.js"></script>
	<script src="../assets/plugins/materialize/js/materialize.min.js"></script>
	<script src="../assets/plugins/slick/js/slick.min.js"></script>
	<script src="../assets/plugins/swipebox/js/jquery.swipebox.js"></script>
	<script src="..//plugins/MixItUp/jquery.mixitup.min.js"></script>
	<script src="../assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
	<script src="../assets/js/custom.js"></script>

</body>
</html>