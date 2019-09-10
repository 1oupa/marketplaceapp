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

				<!-- <div class="home-widget header-account animated fadeInRight"> -->

					<!-- <div class="container">
						<div class="row">
							<div class="col s12">

								<div class="profile-widget">
									<div class="thumb">
										<img src="../assets/images/no-img.jpg" alt="">
									</div>
									<div class="profile-caption">
										<h4 class="name">John Doe</h4>
										<div class="profile-nav">
											<div class="item">
												<span class="val">110</span>
												<span class="val-desc">post</span>
											</div>
											<div class="item">
												<span class="val">14k</span>
												<span class="val-desc">followers</span>
											</div>
											<div class="item">
												<span class="val">527</span>
												<span class="val-desc">following</span>
											</div>
										</div>
										<p class="profile-desc">Lorem ipsum dolor sit amet amet amet dolor ipsum</p>
									</div>
								</div>

							</div> -->
							<!-- .col s12 -->
						<!-- </div> -->
						<!-- .row -->
					<!-- </div> -->
					<!-- .container -->

				<!-- </div> -->
				<!-- .home-widget header-account animated fadeInRight -->

				<div class="container">
					<div class="row no-mb">
						<div class="col s12">

							<div class="animated fadeInUp">



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