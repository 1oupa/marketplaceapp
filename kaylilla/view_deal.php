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
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<div id="main">

		<!-- LEFT SIDEBAR -->
		<?php include 'include/home_left_sidebar.php';?>
		<!-- END LEFT SIDEBAR -->


		<!-- MAIN PAGE -->
		<!-- Class .fixed-navbar is set for .top-navbar & .content-container as floating navbar
		Put this class to make navbar fixed or remove this.
		-->
		<div id="page" class="fixed-navbar">

			<!-- FIXED Top Navbar -->
			<?php include 'include/home_top_navbar.php'; ?>
			<!-- End FIXED Top Navbar -->

			<div class="container">
				<div class="row no-mb">
					<div class="col s12">
				
						<!-- Content container -->
						<div class="content-container shop">
									
							<div class="animated fadeInRight">
								<div class="breadcrumbs"><!-- Product breadcrumb -->
									<a href="home.php">Polokwane</a>
									<a href="view_location_type_deals.php">Discounts</a>
									<a class="active" href="#!">ShoeDog</a>
								</div><!-- End Product breadcrumb -->
								<h2 class="entry-title">
									 50% Off All Kids Sneakers
								</h2>
							</div><!-- .animated fadeInRight -->

							<div class="animated fadeInUp">

								<!-- Product gallery -->
								<div class="thumb-gallery">
									<div class="item">
										<img src="assets/images/no-product-img_orange.jpg" alt="">
									</div>
									<div class="item">
										<img src="assets/images/no-product-img_grey.jpg" alt="">
									</div>
									<div class="item">
										<img src="assets/images/no-product-img_cyan.jpg" alt="">
									</div>
								</div><!-- .thumb-gallery -->

								<!-- Product meta -->
								<div class="product-meta">
									<div class="product-price">
										<span class="product-price-before">R 999.00</span>R 499.00
									</div>
									<!-- Beside .in-stock class, you can also use .out-of-stock class -->
									<div class="availability in-stock">
										Expires: 30/10/2019
									</div>
								</div>

								<!-- Product tabs -->
								<div class="mb-4">
									
									<!-- Tabs navigation -->
									<ul class="tabs">
										<li class="tab"><a class="active" href="#description">Description</a></li>
										<li class="tab"><a href="#review">Review</a></li>
										<li class="tab"><a href="#comments">Comments</a></li>
									</ul>

									<!-- Tabs content -->
									<div class="tabs-content no-padding-top">
										
										<!-- Description -->
										<div id="description">
											<p>The awesome can be light everything do shame in the house. After of all, we made beautiful design in small industry.</p>
											<p>The Association of Southeast Asian Nations is a political and economic organization of ten Southeast Asian countries.</p>
											<p>What its mean? Its mean if we could had delicious and money more, we can't stand on the right side.</p>
										</div><!-- #description -->

										<!-- Review -->
										<div id="review">
											<ol class="product-review-list">
												<li>
													<div class="review-idty">
														<div class="name">
															Andriy Sheva
														</div>
														<div class="product-rating">
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="review-ctn">
														awesome product
													</div>
												</li>
												<li>
													<div class="review-idty">
														<div class="name">
															Carlos de Mello
														</div>
														<div class="product-rating">
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="review-ctn">
														The product has come softly, thank you maleo.
													</div>
												</li>
												<li>
													<div class="review-idty">
														<div class="name">
															Jackson Thiago
														</div>
														<div class="product-rating">
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="review-ctn">
														No one doubt about quality of this product. Congratulations for all.
													</div>
												</li>
												<li>
													<div class="review-idty">
														<div class="name">
															Melanie Ricardo
														</div>
														<div class="product-rating">
															<i class="fa fa-star active"></i>
															<i class="fa fa-star active"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="review-ctn">
														Only one thing, please give us some explanation more.
													</div>
												</li>
											</ol>

										</div><!-- #review -->

										<!-- Comment -->
										<div id="comments">
											<!-- Comment form -->
											<div class="comment-form">
												<h3 class="widget-title no-mb">Leave a comment</h3>
												<form>
													<input type="text" name="name" placeholder="Name">
													<input type="email" name="email" placeholder="Email">
													<textarea name="message" class="materialize-textarea" placeholder="Message" cols="40" rows="4"></textarea>
													<button type="button" class="btn" name="button">Send</button>
												</form>
											</div><!-- .comment-form -->

											<!-- Comment list -->
											<div class="comments no-mb">
												<h3 class="widget-title">Comment</h3>

												<ol class="comment-list">
													<li class="has_child no-padding-top"><!-- Use class "has_child" for make child in the item -->
														<div class="user-pic">
															<img src="assets/images/no-img.jpg" alt="">
														</div>
														<div class="comment-content">
															<h3 class="user-name">Joe Marley</h3>
															<div class="comment-meta">
																14 Oct 2018, 19:55
															</div>
															<p>The incradible of literature is common nor in the clausul</p>
														</div>

														<ol class="comment-list_child">
															<li>
																<div class="user-pic">
																	<img src="assets/images/no-img.jpg" alt="">
																</div>
																<div class="comment-content">
																	<h3 class="user-name">Natalie Amalya</h3>
																	<div class="comment-meta">
																		20 Oct 2018, 20:00
																	</div>
																	<p>Yes, of course</p>
																</div>
															</li>
															<li>
																<div class="user-pic">
																	<img src="assets/images/no-img.jpg" alt="">
																</div>
																<div class="comment-content">
																	<h3 class="user-name">Joe Marley</h3>
																	<div class="comment-meta">
																		20 Oct 2018, 02:25
																	</div>
																	<p>Thank you</p>
																</div>
															</li>
														</ol>

													</li>
													<li>
														<div class="user-pic">
															<img src="assets/images/no-img.jpg" alt="">
														</div>
														<div class="comment-content">
															<h3 class="user-name">Michelle Chan</h3>
															<div class="comment-meta">
																16 Oct 2018, 18:12
															</div>
															<p>Awesome...</p>
														</div>
													</li>
												</ol><!-- .comment-list -->

											</div><!-- .comments -->
										</div><!-- #comment -->

									</div><!-- .tabs-content -->
								</div>

								<!-- Product action -->
								<div class="product-action">
									<a class="btn green btn-block mb-1" href="#">Share</a>
									<!-- <a class="btn grey btn-block" href="#">Add to wishlist</a> -->
								</div>

							</div><!-- .animated fadeInUp -->

						</div><!-- .content-container -->
						<!-- END CONTENT CONTAINER -->

					</div><!-- .col s12 -->
				</div><!-- .row -->
			</div><!-- .container -->

		
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