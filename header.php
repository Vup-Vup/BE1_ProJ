<?php
require "config.php";
require "models/db.php";
require "models/category.php";
require "models/product.php";
require "models/cart.php";
$product = new Product;
$category = new Category;
$cart = new Cart;
$getAllCates = $category->getAllCate();
$getAllProducts = $product->getAllProducts();


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Organicfood</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.webp">

	<!-- all css here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/chosen.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<link rel="stylesheet" href="assets/css/bundle.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<script>
		document.querySelectorAll('.add-to-cart-btn').forEach(button => {
			button.addEventListener('click', function() {
				// Lấy giá trị từ input hidden gần nút được nhấn
				const productId = this.closest('.add-to-cart-form').querySelector('input[name="id"]').value;

				// Gửi dữ liệu bằng Fetch API
				fetch('process_cart.php', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/x-www-form-urlencoded',
						},
						body: `id=${productId}`, // Dữ liệu gửi đi
					})
					.then(response => response.text())
					.then(data => {
						alert(`Phản hồi từ server: ${data}`);
					})
					.catch(error => {
						console.error('Lỗi xảy ra:', error);
						alert('Không thể thêm sản phẩm vào giỏ hàng.');
					});
			});
		});
	</script>
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<!-- Add your site or application content here -->
	<!--Header start-->
	<!-- header middel area start -->
	<div class="header_middle middel_three">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header_middle_wrapper">
						<div class="header_middle_inner">
							<div class="header_top_right">
								<ul class="header_top_right_inner">
									<li class="language_wrapper_two">
										<a href="#">
											<span>My Account <i class="fa fa-angle-down"></i> </span>
										</a>
										<ul class="account__name">
											<li><a href="my-account.php">My account</a></li>
											<li><a href="wishlist.php">Wishlist</a></li>
											<li><a href="login.php">Sign in</a></li>
											<li><a href="register.php">Register</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="logo logo_three">
								<a href="index.php">
									<img src="assets/img/logo/logo.png" alt="">
								</a>
							</div>
							<div class="mini__cart cart_three">
								<div class="mini_cart_inner">
									<div class="cart_icon">
										<a href="cart.php">
											<span class="cart_icon_inner">
												<i class="ion-android-cart"></i>
												<span class="cart_count">2</span>
											</span>
											<span class="item_total">$65.00</span>
										</a>
									</div>
									<!--Mini Cart Box-->
									<div class="mini_cart_box cart_box_three">
										<div class="mini_cart_item">
											<div class="mini_cart_img">
												<a href="#">
													<img src="assets/img/cart/1.jpg" alt="">
													<span class="cart_count">1</span>
												</a>
											</div>
											<div class="cart_info cart_info_two">
												<h5><a href="product-details.php">Mushroom Burger</a></h5>
												<span class="cart_price">$75.99</span>
											</div>
											<div class="cart_remove">
												<a href="#"><i class="zmdi zmdi-delete"></i></a>
											</div>
										</div>
										<div class="mini_cart_item">
											<div class="mini_cart_img">
												<a href="#">
													<img src="assets/img/cart/2.jpg" alt="">
													<span class="cart_count">1</span>
												</a>
											</div>
											<div class="cart_info cart_info_two">
												<h5><a href="#">Country Burger</a></h5>
												<span class="cart_price">$78.99</span>
											</div>
											<div class="cart_remove">
												<a href="#"><i class="zmdi zmdi-delete"></i></a>
											</div>
										</div>

										<div class="price_content">
											<div class="cart_subtotals cart_subtotals_two">
												<div class="price_inline tow">
													<span class="label">Subtotal </span>
													<span class="value">$143.49 </span>
												</div>
											</div>
										</div>
										<div class="min_cart_checkout checkoyt_two">
											<a href="checkout.php">Checkout</a>
										</div>
									</div>
									<!--Mini Cart Box End -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header bottom area start -->
		<div class="header_bottm bottom_three sticky-header">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="main_menu_inner  inner__three">
							<div class="menu menu_three">
								<nav>
									<ul class="menu_three_inner">
										<li class="active"><a href="index.php">Home</a>
										<li><a href="shop.php">shop</a> </li>
										<li><a href="about.php">about us </a> </li>
										<li>
											<div class="search_box search_three">
												<div class="search_inner">
													<form action="result.php" method="get">
														<input name="keyword" type="text" placeholder="Search our catalog">
														<button type="submit"><i class="ion-ios-search"></i></button>
													</form>
												</div>
											</div>
											</form>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-menu mobile_three d-lg-none">
					<nav>
						<ul>
							<li class="active"><a href="index.php">Home</a>
								<ul>
									<li><a href="my-account.php">My account</a></li>
									<li><a href="wishlist.php">Wishlist</a></li>
									<li><a href="login.php">login</a></li>
									<li><a href="register.php">Register</a></li>
								</ul>
							</li>
							<li><a href="about.php">about us </a></li>
							<li><a href="shop.php">shop</a> </li>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
		<!-- header bottom area end -->


	</div>
	<!-- header middel area end -->



	</header>
	<!--Header end-->