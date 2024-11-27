<?php
require "config.php";
require "models/db.php";
require "models/category.php";
require "models/product.php";
$product = new Product;
$category = new Category;
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
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
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
                                                    <li><a href="my-account.html">My account</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="login.html">Sign in</a></li>
													<li><a href="register.html">Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
								    </div>
										<div class="logo logo_three">
											<a href="index.html">
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
															<h5><a href="product-details.html">Mushroom Burger</a></h5>
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
															<div class="price_inline price_inline_tow">
																<span class="label">Shipping </span>
																<span class="value">$7.00</span>
															</div>
															<div class="price_inline price_inline_tow">
																<span class="label">Taxes </span>
																<span class="value">$0.00</span>
															</div>
														</div>
														<div class="cart-total-price cart-total-price_two">
															<span class="label">Total </span>
															<span class="value">$85.99</span>
														</div>
													</div>
													<div class="min_cart_checkout checkoyt_two">
														<a href="checkout.html">Checkout</a>
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
												<li class="active"><a href="#">Home</a> 
												<li><a href="shop.html">shop</a>  </li>
                                                <li><a href="about.html">about us </a> </li>
                                                <li><div class="search_box search_three">
											<div class="search_inner">
												<form action="#">
													<input type="text" placeholder="Search our catalog">
													<button type="submit"><i class="ion-ios-search"></i></button>
												</form>
											</div>
										</div>
												</form></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<div class="mobile-menu mobile_three d-lg-none">
							<nav>
								<ul>
									<li class="active"><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home Version 1</a></li>
											<li><a href="index-2.html">Home Version 2</a></li>
											<li><a href="index-3.html">Home Version 3</a></li>
											<li><a href="index-4.html">Home Version 4</a></li>
										</ul>
									</li>
									<li><a href="about.html">about us </a></li>
									<li><a href="shop.html">shop</a>  </li>
									<li><a href="blog.html">Blog </a>
									</li>
									<li><a href="#">Pages</a>
										<ul>
											<li>
											   <a href="#">Column 1</a>
											   <ul>

												   <li><a href="shop.html">Shop page</a></li>
												   <li><a href="shop-right-sidebar.html">Shop Right sidebar</a></li>
												   <li><a href="shop.html">shop Left Sidebar</a></li>
												   <li><a href="product-details.html">product Details</a></li>
												   <li><a href="my-account.html">My account</a></li>
											   </ul> 
											</li> 
											<li>
											   <a href="#">Column 2</a>
											   <ul>
												   <li><a href="wishlist.html">Wishlist</a></li>
												   <li><a href="cart.html">Cart</a></li>
												   <li><a href="checkout.html">Checkout</a></li>
												   <li><a href="login.html">login</a></li>
												   <li><a href="register.html">Register</a></li>
											   </ul> 
											</li>
											<li>
											   <a href="#">Column 3</a>
											   <ul>

												   <li><a href="about.html">About us</a></li>
												   <li><a href="contact.html">Contact Us</a></li>
												   <li><a href="blog.html">blog Page</a></li>
												   <li><a href="blog-details.html">blog Details</a></li>
												   <li><a href="404.html">Error pages</a></li>
											   </ul> 
											</li>
										</ul>    
									</li>
									<li><a href="#">vegetable</a></li>
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
