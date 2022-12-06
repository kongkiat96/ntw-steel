<?php 
// error_reporting(0);
require("core/config.core.php");
require("core/connect.core.php");
$getdata = new clear_db();
$connect = $getdata->my_sql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connect, "utf8"); 
// $getgroup_product = $getdata->my_sql_query($connect, null, 'group_type_product', null);
 ?>
<!doctype html>
<html lang="th">

<head>
	<?php include 'core/head.php'; ?>
	<style>
		.slider-item.bg-7 {
			background-image: url(assets/images/slider/bg-7.jpg);
		}

		.slider-item.bg-8 {
			background-image: url(assets/images/slider/bg-8.jpg);
		}

		.slider-item.bg-9 {
			background-image: url(assets/images/slider/bg-9.jpg);
		}

		.hero-slider-area.hero-slider-area-style-three .offer-tools {
			background-image: url(assets/images/offer-tools-1.jpg);
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 48%;
			padding: 20px;
			margin-bottom: 24px;
		}

		.hero-slider-area.hero-slider-area-style-three .offer-tools.bg-2 {
			background-image: url(assets/images/offer-tools-2.jpg);
			margin-bottom: 0;
		}
	</style>
</head>

<body>
	<!-- Start Preloader Area -->
	<div class="preloader">
		<div class="content">
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Area -->

	<!-- Start Header Area -->
	<header class="header-area">
		<?php include 'layout/header.php'; ?>
	</header>
	<!-- End Header Area -->

	<!-- Start Cart Shit Area (section 1 slide) -->
	<div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-1" aria-hidden="true">
		<?php include 'layout/slide-section-1.php'; ?>
	</div>
	<!-- End Cart Shit Area -->

	<!-- Start Hero Slider Area -->
	<section class="hero-slider-area hero-slider-area-style-three">
		<?php include 'layout/slide-section-1.php'; ?>
	</section>
	<!-- End Hero Slider Area -->

	<!-- Start Services Area -->
	<section class="services-area ptb-30">
		<div class="container">
			<?php include 'layout/group-product.php'; ?>
		</div>
	</section>
	<!-- End Services Area -->

	<!-- Start Best sellers Area -->
	<section class="best-seller-area pb-30">
		<div class="container">
			<div class="section-title">
				<h2>สินค้ายอดนิยม</h2>
			</div>

			<div class="best-product-slider owl-carousel owl-theme">
			<?php
								$getproduct_new_hot = $getdata->my_sql_select($connect, NULL, "product_name", "product_status = 'Hot' ORDER BY id ASC");
								while ($showlist = mysqli_fetch_object($getproduct_new_hot)) { 
							?>
							<div class="single-products">
								<div class="product-img">
								<a href="#">
										<img src="assets/images/products/<?php echo $showlist->product_img; ?>"
											alt="Image">
									</a>

									<?php 
										if($showlist->product_status == "New"){
											echo '<span class="hot new">New</span>';
										} else{
											echo '<span class="hot">Hot</span>';
										} 
									?>
								</div>

								<div class="product-content">
									<a href="#" class="title">
										<?php echo $showlist->product_name; ?>
									</a>


									<ul class="products-price">
										<li>
											<?php 
												if($showlist->product_stock == "Y") {
													echo '<span class="text-success">In Stock</span>';
												} else if ($showlist->product_stock == "N") {
													echo '<span class="text-danger">Out Stock</span>';
												} else {
													echo "";
												}
											?>
										</li>
									</ul>

									<ul class="products-cart-wish-view text-center">
										<li>
											<button class="eye-btn" data-bs-toggle="modal"
												data-bs-target="#product-group-1">
												<i class="ri-eye-line"></i>
											</button>
										</li>
									</ul>
								</div>
							</div>
							<?php } ?>
			</div>
		</div>
	</section>
	<!-- End Best sellers Area -->

	<!-- Start Sale Offer Area -->
	<section class="sale-offer-area">
		<div class="container">
			<div class="sale-offer-bg">
				<h5>Sale offer - <span>30% off</span></h5>
				<h3>All Types Of Premium Quality Tools</h3>
				<a href="products.html" class="default-btn">
					<i class="ri-eye-fill"></i>
					View All
				</a>
			</div>
		</div>
	</section>
	<!-- End Sale Offer Area -->

	<!-- Start Featured Products Area -->
	<section class="featured-products-area pt-54 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="featured-product-img">
						<div class="featured-product-content">
							<span class="best">สินค้ามาใหม่ และสินค้ายอดนิยม</span>
							<h3>Premium Tools Sets</h3>
							<!-- <span class="offer">Up to 30% off</span> -->

						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<div class="section-title">
						<h2>รายการสินค้ายอดนิยมและนำเข้าใหม่</h2>
					</div>

					<div class="featured-product-wrap">
						<div class="featured-product-slider owl-carousel owl-theme">

							<?php
								$getproduct_new_hot = $getdata->my_sql_select($connect, NULL, "product_name", "product_status = 'New' OR product_status = 'Hot' ORDER BY id ASC");
								while ($showlist = mysqli_fetch_object($getproduct_new_hot)) { 
							?>
							<div class="single-products">
								<div class="product-img">
								<a href="#">
										<img src="assets/images/products/<?php echo $showlist->product_img; ?>"
											alt="Image">
									</a>

									<?php 
										if($showlist->product_status == "New"){
											echo '<span class="hot new">New</span>';
										} else{
											echo '<span class="hot">Hot</span>';
										} 
									?>
								</div>

								<div class="product-content">
									<a href="#" class="title">
										<?php echo $showlist->product_name; ?>
									</a>


									<ul class="products-price">
										<li>
											<?php 
												if($showlist->product_stock == "Y") {
													echo '<span class="text-success">In Stock</span>';
												} else if ($showlist->product_stock == "N") {
													echo '<span class="text-danger">Out Stock</span>';
												} else {
													echo "";
												}
											?>
										</li>
									</ul>

									<ul class="products-cart-wish-view text-center">
										<li>
											<button class="eye-btn" data-bs-toggle="modal"
												data-bs-target="#product-group-1">
												<i class="ri-eye-line"></i>
											</button>
										</li>
									</ul>
								</div>
							</div>
							<?php } ?>



						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Featured Products Area -->

	<!-- Start New Arrivals Area -->
	<?php
        $getgroup = $getdata->my_sql_select($connect, NULL, "group_type_product", "id  = '1' ORDER BY id ASC");
        while ($showgroup = mysqli_fetch_object($getgroup)) { 
    ?>
	<section class="new-arrivals-area pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2><?php echo $showgroup->group_name; ?></h2>

						<a href="products.html" class="read-more">
							View All
						</a>
					</div>
					<div class="row">
						<?php
							$getproduct = $getdata->my_sql_select($connect, NULL, "product_name", "group_type = ".$showgroup->id." ORDER BY id ASC");
							while ($showproduct = mysqli_fetch_object($getproduct)) { 
						?>

						<div class="col-xl-3 col-sm-6">
							<div class="single-products new-arrivals">
								<div class="product-img">
									<a href="#">
										<img src="assets/images/products/<?php echo $showproduct->product_img; ?>"
											alt="Image">
									</a>

									<?php 
										if($showproduct->product_status == "New"){
											echo '<span class="hot new">New</span>';
										} else if ($showproduct->product_status == "Hot") {
											echo '<span class="hot">Hot</span>';
										} else {
											echo '';
										}
									?>
								</div>

								<div class="product-content">
									<a href="#" class="title">
										<?php echo $showproduct->product_name; ?>
									</a>
									<ul class="products-rating">

										<li>
											<a href="#">
												(<?php echo $showproduct->product_detail; ?>)
											</a>
										</li>
									</ul>
									<ul class="products-cart-wish-view text-center">
										<li>
											<button class="eye-btn" data-bs-toggle="modal"
												data-bs-target="#product-group-1">
												<i class="ri-eye-line"></i>
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>



				</div>
			</div>
		</div>
	</section>

	<?php } ?>

	<!-- Start Sale Discount Area -->
	<section class="sale-discount-area pb-54">
		<div class="container">
			<div class="sale-discount-bg">
				<div class="discount-content">
					<h5>Get Discount 30% Off</h5>
					<h3>New Lower Prices On Hundreds Premium Quality Tools</h3>
				</div>
			</div>
		</div>
	</section>
	<!-- End Sale Discount Area -->

	<!-- Start Popular Categories Area -->
	<section class="popular-categories-area pb-30">
		<div class="container">
			<div class="section-title">
				<h2>หมวดหมู่สินค้า</h2>
			</div>

			<div class="row justify-content-center">
				<?php
					$getproduct = $getdata->my_sql_select($connect, NULL, "product_name", "id ORDER BY id ASC");
					while ($showproduct = mysqli_fetch_object($getproduct)) { 
					$countItem = $getdata->my_sql_show_rows($connect, "product_list", "product_id = '".$showproduct->id."'");

				?>
				<div class="col-lg-4 col-sm-6">
					<div class="single-categories">
						<a href="#">
							<img src="assets/images/products/product-25.jpg" alt="Image">
						</a>

						<h3>
							<a href="#">
								<?php echo $showproduct->product_name; ?>
							</a>
						</h3>
						<span><?php echo @number_format($countItem); ?> Products</span>

						<a href="#" class="read-more">
							View All
						</a>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</section>
	<!-- End Popular Categories Area -->

	<!-- Start Partner Area -->
	<!-- <div class="partner-area pb-54">
		<div class="container">
			<div class="partner-wrap">
				<div class="partner-slider owl-carousel owl-theme">
					<div class="partner-item">
						<img src="assets/images/partners/partner-1.png" alt="Image">
					</div>
					<div class="partner-item">
						<img src="assets/images/partners/partner-2.png" alt="Image">
					</div>
					<div class="partner-item">
						<img src="assets/images/partners/partner-3.png" alt="Image">
					</div>
					<div class="partner-item">
						<img src="assets/images/partners/partner-4.png" alt="Image">
					</div>
					<div class="partner-item">
						<img src="assets/images/partners/partner-5.png" alt="Image">
					</div>
					<div class="partner-item">
						<img src="assets/images/partners/partner-6.png" alt="Image">
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Partner Area -->

	<!-- Start Special Area -->
	<!-- <section class="special-area pb-30">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="section-title">
						<h2>Special Offers</h2>
					</div>

					<ul class="trending-product-list special-product-list">
						<li class="single-list">
							<img src="assets/images/products/product-31.jpg" alt="Image">
							<span class="hot new">-30%</span>

							<div class="product-content">
								<a href="#" class="title">
									White Whale Vacuum Cleaner High Quality Product
								</a>

								<ul class="products-price">
									<li>
										$129.00
										<Del>$150.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-32.jpg" alt="Image">
							<span class="hot new">-50%</span>

							<div class="product-content">
								<a href="#" class="title">
									Professional Cordless Drill Power Tools Set Competitive Price
								</a>

								<ul class="products-price">
									<li>
										$90.00
										<Del>$150.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-33.jpg" alt="Image">
							<span class="hot new">-20%</span>

							<div class="product-content">
								<a href="#" class="title">
									Power Tools Set Chinese Manufacturer Production 50V Lithu Battery
								</a>

								<ul class="products-price">
									<li>
										$29.00
										<Del>$50.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="section-title">
						<h2>Popular Products</h2>
					</div>

					<ul class="trending-product-list special-product-list">
						<li class="single-list">
							<img src="assets/images/products/product-34.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									Grinding Machine Polisher Household 5 Inch Mini Portable Power Tools
								</a>

								<ul class="products-price">
									<li>
										$119.00
										<Del>$150.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-35.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									Professional 2000W 25mm Electric Jack Hammer Drill
								</a>

								<ul class="products-price">
									<li>
										$200.00
										<Del>$250.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-36.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									Electrical Magnetic Impact Power Hammer Drills Machine
								</a>

								<ul class="products-price">
									<li>
										$170.00
										<Del>$220.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="section-title">
						<h2>Top Rated Products</h2>
					</div>

					<ul class="trending-product-list special-product-list">
						<li class="single-list">
							<img src="assets/images/products/product-37.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									High Quality Industrial Stapler Powerful Heavy Duty Metal
								</a>

								<ul class="products-price">
									<li>
										$59.00
										<Del>$120.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-38.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									High Quality Carbon Steel Professional Power Tools
								</a>

								<ul class="products-price">
									<li>
										$99.00
										<Del>$130.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>

						<li class="single-list">
							<img src="assets/images/products/product-39.jpg" alt="Image">

							<div class="product-content">
								<a href="#" class="title">
									DFMALB 20V Max XX Oscillating Multi Variable Speed Tool
								</a>

								<ul class="products-price">
									<li>
										$125.00
										<Del>$200.00</Del>
									</li>
								</ul>

								<ul class="products-rating">
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
									<li>
										<i class="ri-star-fill"></i>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Special Area -->

	<!-- Start Footer  Area -->
	<?php include 'layout/footercontact.php'; ?>
	<!-- End Footer  Area -->

	<!-- Start Copy Right Area -->
	<div class="copy-right-area">
		<div class="container">
			<p>
				Copyright © 2022 NTW Steel. Designed By
				<a href="#" target="_blank">NTW STEEL</a>
			</p>
		</div>
	</div>
	<!-- End Copy Right Area -->

	<!-- Start Newsletter Modal -->
	<!-- <div class="popup-overlay popup-hide">
			<div class="container">
				<div class="align-middle">
					<div class="popup-body">
						<div class="popup-close">
							<i class="ri-close-fill"></i>
						</div>
				
						<div class="row align-items-center">
							<div class="col-lg-6">
								<div class="modal-newsletter">
									<h3>Subscribe To Our Newsletter</h3>
									<p>Sign up for our mailing list to get the latest updates & offers.</p>

									<form class="newsletter-form" data-toggle="validator">
										<input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

										<button class="default-btn black-btn" type="submit">
											Subscribe
										</button>
										<div id="validator-newsletter-2" class="form-result"></div>

										<div class="agree-label">
											<input type="checkbox" id="chb1">
											<label for="chb1">
												Do Not Show This Popup Again
											</label>
										</div>
									</form>	
								</div>
							</div>

							<div class="col-lg-6">
								<div class="newsletter-img">
									<img src="assets/images/newsletter-img.jpg" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	<!-- End Newsletter Modal -->

	<!-- Start Product View One Area -->
	<div class="modal fade product-view-one" id="product-group-1">
		<?php include 'layout/popup-section/detail-product-section-1.php'; ?>
	</div>

	<!-- <div class="modal fade product-view-one" id="product-group-2"> 
		<?php //include 'layout/popup-section/detail-product-section-2.php'; ?>
	</div> -->
	<!-- End Product View One Area -->

	<!-- Start Go Top Area -->
	<div class="go-top">
		<i class="ri-arrow-up-s-fill"></i>
		<i class="ri-arrow-up-s-fill"></i>
	</div>
	<!-- End Go Top Area -->

	<?php
	include 'core/footer.php';
	?>
</body>

</html>