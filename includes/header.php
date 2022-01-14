<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cabinets For You</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/aos.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
	
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<div class="logo-wrap">
						<a href="index.php">
							<img src="assets/images/new-logo.png" alt="logo" class="img-fluid">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-10 col-sm-10 col-12">
					<!-- RESPONSIVE NAVIGATION -->
					<div class="navigation-wrap">
						<div id="main-nav" class="stellarnav custom-nav">
							<ul>
								<!--<li><a href="index.php" class="active">Home</a></li>-->
								<li><a href="about-us.php">About Us</a></li>
								<li><a href="categories.php">Categories</a>
									<!--<ul>-->
									<!--    <li><a href="#!">Laundary Room Cabinets</a></li>-->
									<!--    <li><a href="#!">Kitchen Cabinets</a></li>-->
									<!--	<li><a href="#!">Bathroom Cabinets</a></li>-->
									<!--	<li><a href="#!">Closet Cabinets</a></li>-->
									<!--</ul>-->
								</li>
								<li><a href="#!">Cabinets</a>
									<ul>
										<li>
											<a href="rta-cabinets.php">RTA cabinets</a>
                                            <ul>
                                            	<li><a href="hook-loc.php">Hook-Loc Construction</a></li>
                                            	<li><a href="dovetail-assembly.php">Dovetail Assembly</a></li>
                                            	<!--<li><a href="rta-cabinets.php">Construction</a></li>-->
                                            	<li><a href="frameless.php">Frameless Construction</a></li>
                                            </ul>
										</li>
										<!--<li><a href="#!">Pre-Assemble</a></li>-->
										<li><a href="#!">Custom Paint Cabinets</a></li>
									</ul>
								</li>
								<!--<li><a href="#!">Shop</a></li>-->
								<li><a href="Accessories.php">Accessories & More</a></li>
								<li><a href="free-room-design.php">Free Room Design</a></li>
								<li><a href="portfolio.php">Portfolio</a></li>
								<!--<li><a href="contact-us.php">Contact</a></li>-->
								<li><a href="#!" data-bs-toggle="modal" data-bs-target="#login-signup"><i class="far fa-user"></i></a></li>
								<li><a href="#!" id="searchOverlay"><img src="assets/images/search-icon.png" alt="icon" class="img-fluid"></a></li>
								<li><a href="#!" id="cart-side-toggle"><img src="assets/images/shopping-bag-icon.png" alt="icon" class="img-fluid"></a></li>
							</ul>
						</div>
					</div>
					<!-- RESPONSIVE NAVIGATION -->
				</div>
			</div>
		</div>
        <!-- Cart SideBar Starts Here -->
		<div id="cart-sidebar">
		    <div class="cart-sidebar-inner">
			<a id="close-cart-sidebar"><i class="fas fa-times"></i></a>
			<div class="top">
				<p>Cart</p>
			</div>
			<div class="cart-items-wrap">
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/rta-det-1.jpg" class="img-fluid" alt="product-image">
					</div>
					<div class="cart-desc">
						<p class="name">Hardback Cover</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus">-</span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus">+</span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/rta-det-2.jpg" class="img-fluid" alt="product-image">
					</div>
					<div class="cart-desc">
						<p class="name">Hardback Cover</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus">-</span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus">+</span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-img">
						<img src="assets/images/rta-det-3.jpg" class="img-fluid" alt="product-image">
					</div>
					<div class="cart-desc">
						<p class="name">Hardback Cover</p>
						<p class="price">$5.00</p>
						<div class="quaitity-box">
							<div class="plus-minus">
								<span class="minus">-</span>
								<label for="quantity-select">QUANTITY</label>
								<input type="number" class="count" name="qty" value="1" id="quantity-select" disabled="">
								<span class="plus">+</span>
							</div>
						</div>
						<a href="#!" class="delete"><i class="fas fa-times"></i></a>
					</div>
				</div>
			</div>
			<div class="bottom">
				<div class="amount">
					<p><span>Total:</span><span>$500</span></p>
				</div>
				<div class="cart-button">
					<a href="cart.php">Go To Cart</a>
					<a href="checkout.php">Checkout</a>
				</div>
			</div>
		</div>
	    </div>
	    <div class="card-sidebar-overlay"></div>
	    <!-- Cart SideBar Ends Here -->
	    
	    
	    <!--Search Bar Starts Here -->
	    <div class="body-overlay">
            <form id="search-overlay-form">
              <input type="search" placeholder="Search A Product" name="q" value="">
              <span class="fa fa-times closeSearchbar"></span>
            </form>
        </div>
	    <!--Search Bar Ends Here -->
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	</header>
