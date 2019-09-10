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

								<!-- Categories -->
								<div class="home-widget">
									<div class="widget-title">
										Categories
									</div>

									<div class="row shop-category">
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon orange">
												<span class="ti-tablet"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Electronics</a>
											</div>
										</div>
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon lime">
												<span class="ti-desktop"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Computers</a>
											</div>
										</div>
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon blue">
												<span class="ti-paint-roller"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Construction</a>
											</div>
										</div>
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon green">
												<span class="ti-bag"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Restaurant</a>
											</div>
										</div>
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon cyan">
												<span class="ti-headphone"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Accesories</a>
											</div>
										</div>
										<div class="col s4 m3 l2">
											<a href="view_location_category_deals.php" class="icon brown">
												<span class="ti-home"></span>
											</a>
											<div class="caption truncate">
												<a href="view_location_category_deals.php">Home Living</a>
											</div>
										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- End Categories -->

							
								<!-- TRENDING EVENTS -->
								<div class="home-widget">
									<div class="widget-title">
										Trending Events <a href="view_location_type_deals.php" class="badge badge-primary pull-right">View More</a>
									</div>

									<div class="home-featured-products product-list row">
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_cyan.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Purple eyeglass
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 42.99</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Modern watch
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 260.9</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Tablet mini 2
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Women pants
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- END TRENDING EVENTS -->
							
								<!-- TRENDING DISCOUNTS -->
								<div class="home-widget">
									<div class="widget-title">
										Trending Discounts <a href="view_location_type_deals.php" class="badge badge-primary pull-right">View More</a>
									</div>

									<div class="home-featured-products product-list row">
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_cyan.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Purple eyeglass
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 42.99</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Modern watch
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 260.9</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Tablet mini 2
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Women pants
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- END TRENDING DISCOUNTS -->

							
								<!-- TRENDING PROMOTIONS -->
								<div class="home-widget">
									<div class="widget-title">
										Trending Promotions <a href="view_location_type_deals.php" class="badge badge-primary pull-right">View More</a>
									</div>

									<div class="home-featured-products product-list row">
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_cyan.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Purple eyeglass
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 42.99</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Modern watch
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 260.9</span>
												</div>
											</div>
										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Tablet mini 2
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
										<div class="item col s6">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Women pants
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- END TRENDING PROMOTIONS -->

							
								<!-- TRENDING COMPETITIONS -->
								<div class="home-widget">
									<div class="widget-title">
										Trending Competitions <a href="view_location_type_deals.php" class="badge badge-primary pull-right">View More</a>
									</div>

									<div class="home-featured-products product-list row">
										<div class="item col s4">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_cyan.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Purple eyeglass
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 42.99</span>
												</div>
											</div>
										</div>
										<div class="item col s4">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Modern watch
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 260.9</span>
												</div>
											</div>
										</div>
										<div class="item col s4">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Tablet mini 2
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
										<div class="item col s4">
											
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Women pants
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
											</div>

										</div>
									</div>

								</div><!-- .home-widget -->
								<!-- END TRENDING COMPETITIONS -->


								<!-- Latest products -->
								<!-- <div class="home-widget no-mb">
									<div class="widget-title">
										Latest products
									</div> -->

									<!-- Product Small List -->
									<!-- <ul class="product-small-list">
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_cyan.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Tablet Mini 2
													</a>
												</div>
												<div class="product-rating">
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star active"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 499.00</span>
													<span class="price-current">$ 472.5</span>
												</div>
												<div class="mt-3">
													<a class="btn" href="#!">Buy</a>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Woman pants
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 68.00</span>
													<span class="price-current">$ 62.22</span>
												</div>
												<div class="mt-3">
													<a class="btn" href="#!">Buy</a>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_black.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Modern Watch
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 260.9</span>
												</div>
												<div class="mt-3">
													<a class="btn" href="#!">Buy</a>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_orange.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Camping tent
													</a>
												</div>
												<div class="product-price">
													<span class="price-current">$ 102.8</span>
												</div>
												<div class="mt-3">
													<a class="btn" href="#!">Buy</a>
												</div>
											</div>
										</li>
										<li class="valign-wrapper">
											<div class="entry-thumb">
												<a href="#!">
													<img src="assets/images/no-product-img_grey.jpg" alt="">
												</a>
											</div>
											<div class="product-ctn">
												<div class="product-name">
													<a href="#!">
														Black blazer
													</a>
												</div>
												<div class="product-price">
													<span class="product-price-before">$ 178.23</span>
													<span class="price-current">$ 159.00</span>
												</div>
												<div class="mt-3">
													<a class="btn" href="#!">Buy</a>
												</div>
											</div>
										</li>
									</ul> -->
									<!-- End Product Small List -->

								<!-- </div> --><!-- .home-widget -->
								<!-- End Latest products -->

							</div><!-- .animated fadeInUp -->

						</div><!-- .col s12 -->
					</div><!-- .row -->
				</div><!-- .container -->

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