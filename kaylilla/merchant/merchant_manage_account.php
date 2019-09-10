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

								<div class="container">
									<div class="row no-mb">
										<div class="col s12">

											<!-- Content container -->
											<div class="content-container">

												<!-- Page title -->
												<div class="page-title animated fadeInRight">
													Edit Account
												</div><!-- .page-title -->

												<div class="entry-content feature_forms animated fadeInUp">

													<!-- Text inputs -->
													<div class="home-widget" id="text-inputs">
														<div class="widget-title">
															Merchant Details
														</div>

														<form method="post" action="">
															<div class="row">
																<div class="input-field col s12">
																	<label >Merchant Name</label>
																	<input placeholder="Enter Merchant Name" type="text" class="validate">
																</div>
																<div class="col s12">
																	<label> Main Industry</label>
																	<select class="browser-default">
																		<option value="" disabled selected>Choose your option</option>
																		<option value="1">Option 1</option>
																		<option value="2">Option 2</option>
																		<option value="3">Option 3</option>
																	</select><br>
																</div>
																<div class="input-field col s12">
																	<label>Contact</label>
																	<input placeholder="Enter Contact Here" type="text" class="validate">
																</div>
																<div class="input-field col s12">
																	<label>E-mail</label>
																	<input placeholder="Enter Email Here" id="last_name" type="text" class="validate">
																</div>
															</div>
															<div class="row">
																<div class="input-field col s12">
																	<label >Address</label>
																	<input placeholder="Street Address"  type="text" class="validate">
																	<input placeholder="Surburb"  type="text" class="validate">
																	<input placeholder="City"  type="text" class="validate">
																	<select class="browser-default">
																		<option value="" disabled selected>Select A Province</option>
																		<option value="1">Limpopo</option>
																		<option value="2">Gauteng</option>
																		<option value="3">Mpumalanga</option>
																		<option value="3">North West</option>
																		<option value="3">Free State</option>
																		<option value="3">Kwa-Zulu Natal</option>
																		<option value="3">Northern Cape</option>
																		<option value="3">Eastern Cape</option>
																		<option value="3">Western Cape</option>
																	</select>
																</div>
															</div>	
															<br>
															<div class="row">
																<div class=" col s12 widget-title">
																	Social Network Links
																</div>
																<div class="input-field col s12 no-mb no-mt">
																	<i class="material-icons prefix">account_circle</i>
																	<input id="icon_prefix" type="text" class="validate no-mb">
																	<label for="icon_prefix">Facebook</label>
																</div>
																<div class="input-field col s12 no-mb no-mt">
																	<i class="material-icons prefix">phone</i>
																	<input id="icon_telephone" type="tel" class="validate no-mb">
																	<label for="icon_telephone">Twitter</label>
																</div>
																<div class="input-field col s12 no-mb no-mt">
																	<i class="material-icons prefix">phone</i>
																	<input id="icon_telephone" type="tel" class="validate no-mb">
																	<label for="icon_telephone">Instagram</label>
																</div>
															</div>

															<!-- <div class="row">
																<div class="input-field col s12">
																	<input disabled value="I am not editable" id="disabled" type="text" class="validate no-mb">
																	<label for="disabled">Disabled</label>
																</div>
															</div> -->
															<br>
															<div class="widget-title">
																Login Details
															</div>
															<div class="row">
																<div class="input-field col s12 no-mb">
																	<input id="email" type="email" class="validate no-mb">
																	<label for="email">Email</label>
																</div>
															</div>
															<div class="row">
																<div class="input-field col s12">
																	<input id="password" type="password" class="validate no-mb">
																	<label for="password">Password</label>
																</div>
															</div>															
															<!-- <div class="row">
																<div class="col s12">
																	Inline input:
																	<div class="input-field inline no-mb">
																		<input id="email_inline" type="email" class="validate">
																		<label for="email_inline">Email</label>
																		<span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
																	</div>
																</div>
															</div> -->
															<div class="product-action">
																<a class="btn btn-block mb-1" href="merchant.php">Update</a>
															</div>
														</form>
													</div>
													<!-- End text inputs -->
													
													<!-- Icon prefixes -->
													<!-- <div class="home-widget" id="icon-prefixes">
														<div class="widget-title">
															Icon prefixes
														</div>

														<div class="row">
															<div class="input-field col s6 no-mb no-mt">
																<i class="material-icons prefix">account_circle</i>
																<input id="icon_prefix" type="text" class="validate no-mb">
																<label for="icon_prefix">First Name</label>
															</div>
															<div class="input-field col s6 no-mb no-mt">
																<i class="material-icons prefix">phone</i>
																<input id="icon_telephone" type="tel" class="validate no-mb">
																<label for="icon_telephone">Telephone</label>
															</div>
														</div>

													</div> -->
													<!-- End icon prefixes -->
													
													<!-- Textarea -->
													<!-- <div class="home-widget" id="textarea">
														<div class="widget-title">
															Textarea
														</div>

														<div class="row">
															<div class="input-field col s12 no-mb no-mt">
																<textarea id="textarea1" class="materialize-textarea no-mb"></textarea>
																<label for="textarea1">Textarea</label>
															</div>
														</div>

													</div> -->
													<!-- End textarea -->
													
													<!-- File input -->
													<!-- <div class="home-widget" id="file-input">
														<div class="widget-title">
															File input
														</div>

														<form action="#">
															<div class="file-field input-field">
																<div class="btn">
																	<span>File</span>
																	<input type="file">
																</div>
																<div class="file-path-wrapper">
																	<input class="file-path validate" type="text">
																</div>
															</div>
														</form>
														
														<p>You can also use the <code>multiple</code> attribute to allow multiple file uploads.</p>
														
														<form action="#">
															<div class="file-field input-field">
																<div class="btn">
																	<span>File</span>
																	<input type="file" multiple>
																</div>
																<div class="file-path-wrapper">
																	<input class="file-path validate" type="text" placeholder="Upload one or more files">
																</div>
															</div>
														</form>
													</div> -->
													<!-- End file input -->
													
													<!-- Checkboxes -->
													<!-- <div class="home-widget" id="checkboxes">
														<div class="widget-title">
															Checkboxes
														</div>

														<form action="#">
															<div class="mb-2">
																<label>
																	<input type="checkbox" />
																	<span>Red</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input type="checkbox" checked="checked" />
																	<span>Yellow</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input type="checkbox" class="filled-in" checked="checked" />
																	<span>Filled in</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input id="indeterminate-checkbox" type="checkbox" />
																	<span>Indeterminate Style</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input type="checkbox" checked="checked" disabled="disabled" />
																	<span>Green</span>
																</label>
															</div>
															<div>
																<label>
																	<input type="checkbox" disabled="disabled" />
																	<span>Brown</span>
																</label>
															</div>
														</form>
													</div> -->
													<!-- End checkboxes -->
													
													<!-- Radio -->
													<!-- <div class="home-widget" id="radio">
														<div class="widget-title">
															Radio
														</div>

														<form action="#">
															<div class="mb-2">
																<label>
																	<input name="group1" type="radio" checked />
																	<span>Red</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input name="group1" type="radio" />
																	<span>Yellow</span>
																</label>
															</div>
															<div class="mb-2">
																<label>
																	<input class="with-gap" name="group1" type="radio"  />
																	<span>Green</span>
																</label>
															</div>
															<div>
																<label>
																	<input name="group1" type="radio" disabled="disabled" />
																	<span>Brown</span>
																</label>
															</div>
														</form>

													</div> -->
													<!-- End radio -->
													
													<!-- Select -->
													<!-- <div class="home-widget" id="select">
														<div class="widget-title mb-4">
															Select
														</div>
														<div class="input-field">
															<select>
																<option value="" disabled selected>Choose your option</option>
																<option value="1">Option 1</option>
																<option value="2">Option 2</option>
																<option value="3">Option 3</option>
															</select>
															<label>Materialize Select</label>
														</div>

														<label>Browser Select</label>
														<select class="browser-default">
															<option value="" disabled selected>Choose your option</option>
															<option value="1">Option 1</option>
															<option value="2">Option 2</option>
															<option value="3">Option 3</option>
														</select>

													</div> -->
													<!-- End select -->
													
													<!-- Switch -->
													<!-- <div class="home-widget" id="switch">
														<div class="widget-title">
															Switch
														</div> -->

														<!-- Switch -->
														<!-- <div class="switch mb-2">
															<label>
																Off
																<input type="checkbox">
																<span class="lever"></span>
																On
															</label>
														</div> -->
														
														<!-- Disabled Switch -->
														<!-- <div class="switch pb-1">
															<label>
																Off
																<input disabled type="checkbox">
																<span class="lever"></span>
																On
															</label>
														</div>
													</div> -->
													<!-- End switch -->
													
													<!-- Range -->
													<!-- <div class="home-widget" id="range">
														<div class="widget-title">
															Range
														</div>
														<form action="#">
															<p class="range-field no-mb">
																<input type="range" id="test5" min="0" max="100" class="no-mb" />
															</p>
														</form>
													</div> -->
													<!-- End range -->
													
													<!-- Pickers -->
													<!-- <div class="home-widget no-mb" id="pickers">
														<div class="widget-title">
															Pickers
														</div>
														<div class="mb-2">
															<input type="text" class="datepicker" placeholder="Date picker">
														</div>
														<div>
															<input type="text" class="timepicker" placeholder="Time picker">
														</div>
													</div> -->
													<!-- End pickers -->

												</div>

											</div><!-- .content-container -->

										</div><!-- .col s12 -->
									</div><!-- .row -->
								</div><!-- .container -->


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