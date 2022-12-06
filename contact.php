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

    <!-- Start Page Title Area -->
		<div class="page-title-area">
			<div class="container">
				<div class="page-title-content">
					<ul>
						<li>
							<a href="index">
								หน้าแรก 
							</a>
						</li>

						<li class="active">ติดต่อเรา</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

    <section class="contact-area ptb-54">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-info-europe">
							<h3>Contact Details</h3>

							<ul>
								<li class="p-0">
									<h4>ที่อยู่</h4>
								</li>
								<li>
									<i class="ri-map-pin-line"></i>
									เลขที่ 99/147 ซอย หมู่บ้านธนานนท์ ซอย 10 ตำบล บางกร่าง อำเภอเมืองนนทบุรี นนทบุรี 11000 ประเทศไทย
								</li>
								<li>
									<i class="ri-phone-line"></i>
									<a href="tel:0955210840">095-521-0840</a>
                                    ,
									<a href="tel:0944406767">094-440-6767</a>
								</li>
								<li>
									<i class="ri-mail-send-line"></i>
									<a href="mailto:ehay@example.com">ntwsteel@ntwsteel.com</a>
								</li>
								<li>
									<i class="ri-time-line"></i>
									วันจันทร์ - เสาร์ เวลา : 08.00 - 17.00 น.
								</li>
							</ul>

						</div>
					</div>

					<div class="col-lg-8">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1162.8253177051342!2d100.44509909640402!3d13.851690997850044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bdc19568dc5%3A0x260588be76de1ee8!2z4Lia4LiI4LiBLuC5gOC4reC5h-C4meC4l-C4teC4lOC4seC4muC5gOC4muC4tOC5ieC4peC4ouC4uSDguKrguJXguLXguKU!5e0!3m2!1sen!2sth!4v1670337056038!5m2!1sen!2sth"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Contact Area -->
		<section class="contact-area pb-54">
			<div class="container">
				<div class="contact-form">
					<h2>ติดต่อขอใบเสนอราคา</h2>

					<form id="contactForm">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>ชื่อผู้ติดต่อ</label>
									<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>หมายเลขโทรศัพท์</label>
									<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<div class="form-group">
									<label>หัวเรื่อง</label>
									<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label>ข้อมความ</label>
									<textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn">
									<span>ส่งข้อมูล</span>
								</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

	<?php include 'layout/footercontact.php'; ?>

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