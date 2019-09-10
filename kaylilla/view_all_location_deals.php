<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Home - MarketPlace</title> <!-- show location using get in -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<div id="main">

		<!-- LEFT SIDEBAR -->
		<?php include 'include/home_left_sidebar.php'; ?>
		<!-- END LEFT SIDEBAR -->


		<!-- MAIN PAGE -->
		<!-- Class .fixed-navbar is set for .top-navbar & .content-container as floating navbar
		Put this class to make navbar fixed or remove this.
		-->
		<div id="page" class="fixed-navbar">

			<!-- FIXED Top Navbar -->
			<?php include 'include/home_top_navbar.php';?>
			<!-- End FIXED Top Navbar -->

			<!-- CONTENT CONTAINER -->
			<div class="content-container no-padding-top">

				<div class="home-widget animated fadeInRight">
								
					<!-- Shop slider -->
					<!-- <div class="home-slider shop"> 
						<div class="item">-->
							<!-- Shop slider #1 -->
							<!-- <div class="entry-thumb">
								<img src="assets/images/no-image_cyan.jpg" alt="">
											
								<div class="post-caption">
									<div class="title">
										Upto 70% discount!
									</div>
									<p class="desc">
										Lorem ipsum dolor sit amet
									</p>
								</div>

							</div>
						</div> -->
						<!-- .item #1 -->
						<!-- <div class="item"> -->
							<!-- Shop slider #2 -->
					<!-- 		<div class="entry-thumb">
								<img src="assets/images/no-image_black.jpg" alt="">
											
								<div class="post-caption">
									<div class="title">
										Buy 1 get 1 free
									</div>
									<p class="desc">
										Lorem ipsum dolor sit amet
									</p>
								</div>

							</div>
						</div> -->
						<!-- .item #2 -->
						<!-- <div class="item"> -->
							<!-- Shop slider #3 -->
						<!-- 	<div class="entry-thumb">
								<img src="assets/images/no-image_orange.jpg" alt="">
											
								<div class="post-caption">
									<div class="title">
										Happy month sale
									</div>
									<p class="desc">
										Lorem ipsum dolor sit amet
									</p>
								</div>

							</div>
						</div> -->
						<!-- .item #3 -->
					<!-- </div> -->
					<!-- .home-slider shop -->
					<!-- End Shop slider -->

				</div><!--.home-widget animated fadeInRight -->

				<div class="container">
					<div class="row no-mb">
						<div class="col s12">

							<div class="animated fadeInUp">

									<!-- Page title -->
									<div class="page-title animated fadeInRight">
										All Deals in Polokwane
									</div><!-- .page-title -->

									<!-- Portfolio -->
									<div class="portfolio animated fadeInUp">

										<div class="port-nav-container">
											<div class="port-nav">
												<a href="#" class="port-grid active"><span class="ti-view-grid"></span></a>
												<a href="#" class="port-list"><span class="ti-view-list"></span></a>
											</div>
											<div class="port-tabs">
												<ul class="tabs"><!-- Tabs navigation -->
													<li class="tab filter-btn" data-filter="all"><a class="active" href="#one">New</a></li>
													<li class="tab filter-btn" data-filter=".blog"><a href="#blog">Trending</a></li>
													<li class="tab filter-btn" data-filter=".shop"><a href="#shop">Ending</a></li>
												</ul><!-- End Tabs navigation -->
											</div>
										</div>
										
										<!-- Gallery image lists -->
										<div id="mix-wrapper">
											<a href="assets/images/no-image_orange.jpg" class="swipebox mix-target blog" title="This is dummy caption.">
												<img src="assets/images/no-image_orange.jpg" alt="image">
											</a>
											<a href="assets/images/no-image_grey.jpg" class="swipebox mix-target shop" title="This is dummy caption.">
												<img src="assets/images/no-image_grey.jpg" alt="">
											</a>
											<a href="assets/images/no-image_black.jpg" class="swipebox mix-target blog" title="This is dummy caption.">
												<img src="assets/images/no-image_black.jpg" alt="">
											</a>
											<a href="assets/images/no-image_cyan.jpg" class="swipebox mix-target shop" title="This is dummy caption.">
												<img src="assets/images/no-image_cyan.jpg" alt="">
											</a>
											<a href="assets/images/no-image_grey.jpg" class="swipebox mix-target blog" title="This is dummy caption.">
												<img src="assets/images/no-image_grey.jpg" alt="image">
											</a>
											<a href="assets/images/no-image_cyan.jpg" class="swipebox mix-target shop" title="This is dummy caption.">
												<img src="assets/images/no-image_cyan.jpg" alt="">
											</a>
										</div>
										<!-- End Gallery image lists -->

										<div class="clear"></div>

									</div>
									<!-- End Portfolio -->
								
							</div><!-- .animated fadeInUp -->

						</div>

					</div>

			</div><!-- .content-container -->
			<!-- END CONTENT CONTAINER -->

		
			<!-- FOOTER -->
			<?php include 'include/footer.php';?>
			<!-- End FOOTER -->

			<!-- Back to top Link -->
			<div id="to-top" class="main-bg">
				<span class="ti-arrow-up"></span>
			</div> 

		</div>
		<!-- END MAIN PAGE -->

	</div><!-- #main -->

	<script src="assets/plugins/jQuery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/materialize/js/materialize.min.js"></script>
	<script src="assets/plugins/slick/js/slick.min.js"></script>
	<script src="assets/plugins/swipebox/js/jquery.swipebox.js"></script>
	<script src="assets/plugins/MixItUp/jquery.mixitup.min.js"></script>
	<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>