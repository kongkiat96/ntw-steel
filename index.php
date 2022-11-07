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
				<h2>Best Sellers</h2>
			</div>

			<div class="best-product-slider owl-carousel owl-theme">
				<?php include 'layout/product-section-1.php'; ?>
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
					<i class="ri-shopping-cart-line"></i>
					Shop Now
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
							<span class="best">Best Deals</span>
							<h3>Premium Tools Sets</h3>
							<span class="offer">Up to 30% off</span>
							<a href="products.html">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<div class="section-title">
						<h2>Featured Products</h2>
					</div>

					<div class="featured-product-wrap">
						<?php include 'layout/product-section-2.php'; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Featured Products Area -->

	<!-- Start New Arrivals Area -->
	<section class="new-arrivals-area pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>New Arrivals</h2>

						<a href="products.html" class="read-more">
							View All
						</a>
					</div>

					<?php include 'layout/product-section-3.php'; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End New Arrivals Area -->

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
				<h2>Popular Categories</h2>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6">
					<div class="single-categories">
						<a href="product-details.html">
							<img src="assets/images/products/product-25.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Power Tools
							</a>
						</h3>
						<span>15 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-categories bg-eff5ff">
						<a href="product-details.html">
							<img src="assets/images/products/product-26.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Machine Tools
							</a>
						</h3>
						<span>05 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-categories bg-ebf1f5">
						<a href="product-details.html">
							<img src="assets/images/products/product-27.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Hand Tools
							</a>
						</h3>
						<span>18 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-categories bg-ebf9ea">
						<a href="product-details.html">
							<img src="assets/images/products/product-28.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Cordless Tools
							</a>
						</h3>
						<span>19 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-categories bg-fff8e5">
						<a href="product-details.html">
							<img src="assets/images/products/product-29.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Welding & Soldering
							</a>
						</h3>
						<span>04 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6">
					<div class="single-categories bg-f3f1ff">
						<a href="product-details.html">
							<img src="assets/images/products/product-30.jpg" alt="Image">
						</a>

						<h3>
							<a href="product-details.html">
								Socket Wrenches
							</a>
						</h3>
						<span>12 Products</span>

						<a href="product-details" class="read-more">
							Shop Now
						</a>
					</div>
				</div>
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
	<section class="special-area pb-30">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
								<a href="product-details.html" class="title">
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
	</section>
	<!-- End Special Area -->

	<!-- Start Subscribe Area -->
	<section class="subscribe-area ptb-54">
		<div class="container">
			<div class="partner-area">
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
	</section>
	<!-- End Subscribe  Area -->

	<!-- Start Footer  Area -->
	<div class="footer-area pt-54 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Quick Information</h3>

						<ul class="info-list">
							<li>
								<i class="ri-map-pin-line"></i>
								2491 Reel Avenue Albuquerque, NM
							</li>
							<li>
								<i class="ri-phone-line"></i>
								<a href="tel:+1-(514)-321-4566">+1 (514) 321-4566</a>
							</li>
							<li>
								<i class="ri-mail-send-line"></i>
								<a href="mailto:ehay@example.com">ehay@example.com</a>
							</li>
							<li>
								<i class="ri-time-line"></i>
								Mon-Sat 8:00 AM - 8:00 PM
							</li>
						</ul>

						<ul class="social-link">
							<li>
								<span>Stay connected:</span>
							</li>
							<li>
								<a href="https://www.facebook.com/" target="_blank">
									<i class="ri-facebook-fill"></i>
								</a>
							</li>
							<li>
								<a href="https://www.twitter.com/" target="_blank">
									<i class="ri-twitter-fill"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/" target="_blank">
									<i class="ri-linkedin-fill"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/" target="_blank">
									<i class="ri-instagram-fill"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Information</h3>

						<ul class="import-link">
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="order-tracking.html">Order Tracking</a>
							</li>
							<li>
								<a href="terms-conditions.html">Terms & Conditions</a>
							</li>
							<li>
								<a href="store-location.html">Store Location</a>
							</li>
							<li>
								<a href="privacy-policy.html">Privacy Policy</a>
							</li>
							<li>
								<a href="faq.html">Delivery Information</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Customer Service</h3>

						<ul class="import-link">
							<li>
								<a href="faq.html">Help Center</a>
							</li>
							<li>
								<a href="products.html">Products</a>
							</li>
							<li>
								<a href="terms-conditions.html">Money-back Guarantee!</a>
							</li>
							<li>
								<a href="blog.html">Blog</a>
							</li>
							<li>
								<a href="privacy-policy.html">Accessibility</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="single-footer-widget">
						<h3>Download App On Mobile</h3>
						<p>30% discount on your first order</p>

						<ul class="app-btn">
							<li>
								<a href="https://www.apple.com/store" target="_blank">
									<img src="assets/images/app-store.png" alt="Image">
								</a>
							</li>
							<li>
								<a href="https://play.google.com/store/apps" target="_blank">
									<img src="assets/images/google-play.png" alt="Image">
								</a>
							</li>
						</ul>

						<span class="payment">We Accept Payment Via</span>

						<ul class="payment-option">
							<li>
								<img src="assets/images/payment/payment-1.png" alt="Image">
							</li>
							<li>
								<img src="assets/images/payment/payment-2.png" alt="Image">
							</li>
							<li>
								<img src="assets/images/payment/payment-3.png" alt="Image">
							</li>
							<li>
								<img src="assets/images/payment/payment-4.png" alt="Image">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<div class="modal fade product-view-one" id="exampleModal">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<button type="button" class="close" data-bs-dismiss="modal">
					<span aria-hidden="true">
						<i class="ri-close-line"></i>
					</span>
				</button>

				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="product-view-one-image">
							<div id="big" class="owl-carousel owl-theme">
								<div class="item">
									<img src="assets/images/products/product-1.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-2.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-3.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-4.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-5.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-6.jpg" alt="Image">
								</div>
							</div>

							<div id="thumbs" class="owl-carousel owl-theme">
								<div class="item">
									<img src="assets/images/products/product-1.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-2.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-3.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-4.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-5.jpg" alt="Image">
								</div>

								<div class="item">
									<img src="assets/images/products/product-6.jpg" alt="Image">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="product-content">
							<h3>
								Cordless Drill Professional Combo Drill And Screwdriver
							</h3>

							<div class="product-review">
								<div class="rating">
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
									<i class="ri-star-fill"></i>
								</div>
								<a href="#" class="rating-count">4 Reviews</a>
							</div>

							<div class="price">
								<span class="new-price">$119.0 <del>$219.0</del></span>
								<span class="in-stock">In Stock (8 Items)</span>
							</div>

							<ul class="product-info">
								<li>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad reprehenderit fuga nam, non odit necessitatibus facilis beatae temporibus</p>
								</li>
								<li>
									<span>SKU:</span>
									001
								</li>
								<li>
									<span>Availability:</span>
									Available
								</li>
								<li>
									<span>Brand:</span>
									Ehay
								</li>
								<li>
									<span>Categories:</span>
									<a href="products.html">Power Drill</a>
								</li>
							</ul>

							<div class="product-color-switch">

								<ul>
									<li>
										<span>Color:</span>
									</li>
									<li>
										<button title="Black" class="color-black"></button>
									</li>
									<li>
										<button title="White" class="color-white"></button>
									</li>
									<li class="active">
										<button title="Green" class="color-green"></button>
									</li>
									<li>
										<button title="Yellow Green" class="color-yellowgreen"></button>
									</li>
									<li>
										<button title="Teal" class="color-teal"></button>
									</li>
								</ul>
							</div>

							<div class="product-add-to-cart">
								<div class="input-counter">
									<span class="minus-btn">
										<i class="ri-subtract-line"></i>
									</span>

									<input type="text" value="1">

									<span class="plus-btn">
										<i class="ri-add-line"></i>
									</span>
								</div>

								<a href="cart.html" class="default-btn">
									<i class="ri-shopping-cart-line"></i>
									Add To Cart
								</a>
							</div>

							<div class="wishlist-btn">
								<a href="wishlist.html" class="default-btn">
									<i class="ri-heart-line"></i>
									Wishlist
								</a>
							</div>

							<div class="share-this-product">
								<ul>
									<li>
										<span>Share</span>
									</li>
									<li>
										<a href="https://www.facebook.com/" target="_blank">
											<i class="ri-facebook-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/" target="_blank">
											<i class="ri-instagram-line"></i>
										</a>
									</li>
									<li>
										<a href="https://www.linkedin.com/" target="_blank">
											<i class="ri-linkedin-fill"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" target="_blank">
											<i class="ri-twitter-fill"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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