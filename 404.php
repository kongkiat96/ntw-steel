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

    <!-- Start 404 Error -->
		<div class="error-area ptb-54">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="error-content">
						<h1>4 <span class="red">0</span> 4</h1>
						<h3>ไม่พบหน้าที่กำลังเข้าถึง !</h3>
						<p>อยู่ระหว่างปรับปรุงหรือไม่พบข้อมูลใด ๆ</p>

						<a href="index" class="default-btn two">
							กลับหน้าหลัก
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End 404 Error -->

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