<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>JasGym</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	

	<!-- Header Section -->
	<?php include 'include/header.php';?>
	<!-- Header Section end -->
	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>About JasGym</h2>
				</div>
			</div>
		</div>
	</section>



	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>About Us</h2>
			</div>
			<div class="row">

				<div class="col-lg-12 col-sm-6">
			<p class="text-center">At JasGym, we believe fitness is about strength, confidence, and community. Our mission is to empower individuals to achieve their health goals by offering state‑of‑the‑art equipment, certified trainers, flexible memberships, and diverse group classes. With lifestyle amenities like recovery zones and personal training, JasGym provides more than a workout—it’s a supportive space where beginners and athletes alike can transform fitness into a lasting lifestyle.</p>
				</div>
			</div>
		</div>
	</section>
	

	<!-- Footer Section -->
	<?php include 'include/footer.php'; ?>
	<!-- Footer Section end -->

	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model end -->
	<!-- 


	- Author Name: MH RONY.
	- GigHub Link: https://github.com/dev-mhrony
	- Facebook Link:https://www.facebook.com/dev.mhrony
	- Youtube Link: <a href = "https://www.youtube.com/@codecampbdofficial"> Code Camp BD</a>
	- for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com
	- Visit My Website : https://dev-mhrony.com
	 -->
	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
