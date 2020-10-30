<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Dooplo - Gaming HTML Template</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('landingpage/page3/assets/images/favicon.png')}}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('landingpage/page3/assets/css/bootstrap.min.css')}}">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{ asset('landingpage/page3/assets/css/plugin.css')}}">

	<!-- stylesheet -->
	<link rel="stylesheet" href="{{ asset('landingpage/page3/assets/css/style.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('landingpage/page3/assets/css/responsive.css')}}">
</head>

<body>
	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->

	<!-- Header Area Start  -->
	<header class="header">
		<!-- Top Header Area Start -->
		<section class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="content">
							<div class="left-content">
								<ul class="left-list">
									<li>
										<p>
											<i class="fas fa-headset"></i>	Support
										</p>
									</li>
									<li>
										<p>
											<i class="fas fa-envelope"></i>	info@Dooplo.com
										</p>
									</li>
									<li>
										<div class="language-selector">
											<select name="language" class="language">
												<option value="1">English</option>
												<option value="2">France</option>
												<option value="3">Japan</option>
											</select>
										</div>
									</li>
								</ul>
							</div>
							<div class="right-content">
								<ul class="right-list">
									<li>
										<div class="cart-icon tm-dropdown">
											<i class="fas fa-cart-arrow-down"></i>
											<span class="cart-count">10</span>
											<div class="tm-dropdown-menu">
												<ul class="list">
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
															<div class="close">
																	<i class="fas fa-times"></i>
															</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
													<li class="list-item">
														<div class="close">
																<i class="fas fa-times"></i>
														</div>
														<ul class="number-list">
															<li>24</li>
															<li>25</li>
															<li>26</li>
															<li>27</li>
															<li>28</li>
														</ul>
													</li>
												</ul>
												<a href="cart.html" class="link-btn">Cart Page</a>
											</div>
										</div>
									</li>
									<li>
										<div class="notofication tm-dropdown">
											<i class="fas fa-bell"></i>
											<span class="count">11</span>
											<div class="tm-dropdown-menu">
													<ul class="list">
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fas fa-bell"></i>
																Invest Exchange
															</a>
														</li>
													</ul>
												</div>
										</div>
									</li>
									<li>
										<a href="#" class="sign-in" data-toggle="modal" data-target="#login">
											<i class="fas fa-user"></i> Sign In
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Top Header Area End -->
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html">
								<img src="{{ asset('landingpage/page3/assets/images/logo.png')}}" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item dropdown">
										<a class="nav-link active dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											Home
										<div class="mr-hover-effect"></div>
										</a>
										<ul class="dropdown-menu" >
											<li><a class="dropdown-item" href="index.html"> <i class="fa fa-angle-double-right"></i>Home 1</a></li>
											<li><a class="dropdown-item" href="index2.html"> <i class="fa fa-angle-double-right"></i> Home 2</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="play.html">Play
												<div class="mr-hover-effect"></div></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="lottery.html">lottery
												<div class="mr-hover-effect"></div></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="tournaments.html">tournaments
												<div class="mr-hover-effect"></div></a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											Pages
											<div class="mr-hover-effect"></div>
										</a>
										<ul class="dropdown-menu" >
											<li><a class="dropdown-item" href="about.html"> <i class="fa fa-angle-double-right"></i>About</a></li>
											<li><a class="dropdown-item" href="affiliate.html"> <i class="fa fa-angle-double-right"></i>Affiliate</a></li>
											<li><a class="dropdown-item" href="awards.html"> <i class="fa fa-angle-double-right"></i>Awards</a></li>
											<li><a class="dropdown-item" href="bonus.html"> <i class="fa fa-angle-double-right"></i>Bonus</a></li>
											<li><a class="dropdown-item" href="cart.html"> <i class="fa fa-angle-double-right"></i>Cart</a></li>
											<li><a class="dropdown-item" href="faq.html"> <i class="fa fa-angle-double-right"></i>Faq</a></li>
											<li><a class="dropdown-item" href="how-it-work.html"> <i class="fa fa-angle-double-right"></i>How It Work</a></li>
											<li><a class="dropdown-item" href="terms-conditions.html"> <i class="fa fa-angle-double-right"></i>Terms & Condition</a></li>
											<li><a class="dropdown-item" href="terms-conditions-details.html"> <i class="fa fa-angle-double-right"></i>Condition Details</a></li>
											<li><a class="dropdown-item" href="404.html"> <i class="fa fa-angle-double-right"></i>404</a></li>
										</ul>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="contact.html">Contact
													<div class="mr-hover-effect"></div></a>
										</li>
								</ul>
								<a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join us</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
	<!-- Header Area End  -->

	<!-- Hero Area Start -->
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 d-flex align-self-center">
					<div class="left-content">
						<div class="content">
							<h5 class="subtitle">
								New Crypto Game
							</h5>
							<h1 class="title">
									PLay To WIN
							</h1>
							<p class="text">
									Play, Invest,Exchange and Join the
									Contest with high rewards at Dooplo!
							</p>
							<div class="links">
								<a href="#" class="mybtn1 link1">Get Started Now!</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img2 d-block d-md-none">
						<img src="{{ asset('landingpage/page3/assets/images/heroarea.png')}}" alt="">
					</div>
					<div class="hero-img d-none d-md-block">
						<img class="img-fluid full-image" src="{{ asset('landingpage/page3/assets/images/heroarea.png')}}" alt="">
						<img class="shape phone" src="{{ asset('landingpage/page3/assets/images/h-shapes/phone.png')}}" alt="">
						<img class="shape man" src="{{ asset('landingpage/page3/assets/images/h-shapes/man222.png')}}" alt="">
						<img class="shape ripple" src="{{ asset('landingpage/page3/assets/images/h-shapes/ripple.png')}}" alt="">
						<img class="shape ripple2" src="{{ asset('landingpage/page3/assets/images/h-shapes/ripple1.png')}}" alt="">
						<img class="shape bitcoin1" src="{{ asset('landingpage/page3/assets/images/h-shapes/bitcoin1.png')}}" alt="">
						<img class="shape bitcoin2" src="{{ asset('landingpage/page3/assets/images/h-shapes/bitcoin2.png')}}" alt="">
						<img class="shape shape-icon" src="{{ asset('landingpage/page3/assets/images/h-shapes/shape.png')}}" alt="">
						<img class="shape award-bg" src="{{ asset('landingpage/page3/assets/images/h-shapes/award/bg.png')}}" alt="">
						<img class="shape award" src="{{ asset('landingpage/page3/assets/images/h-shapes/award/award.png')}}" alt="">
						<img class="shape gift-bg" src="{{ asset('landingpage/page3/assets/images/h-shapes/giftbox/bg.png')}}" alt="">
						<img class="shape gift" src="{{ asset('landingpage/page3/assets/images/h-shapes/giftbox/gift.png')}}" alt="">
						<img class="shape shield-bg" src="{{ asset('landingpage/page3/assets/images/h-shapes/shield/bg.png')}}" alt="">
						<img class="shape shield" src="{{ asset('landingpage/page3/assets/images/h-shapes/shield/shield.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero Area End -->

	<!-- Featured Game Area Start -->
	<section class="featured-game">
		<!-- Features Area Start -->
		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="feature-box">
							<div class="feature-box-inner">
								<div class="row">
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon one">
												<img src="{{ asset('landingpage/page3/assets/images/feature/icon1.png')}}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
													Exclusive Offer
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon two">
												<img src="{{ asset('landingpage/page3/assets/images/feature/icon2.png')}}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
													Provably Fair
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6">
										<div class="single-feature">
											<div class="icon three">
												<img src="{{ asset('landingpage/page3/assets/images/feature/icon3.png')}}" alt="">
											</div>
											<div class="content">
												<h4 class="title">
														24/7 Support
												</h4>
												<a href="#" class="link">read more <i class="fas fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Features Area End -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h5 class="subtitle">
								Try to check out our
						</h5>
						<h2 class="title">
								featured games
						</h2>
						<p class="text">
								Check out our latest featured game! To meet today's challenges & earn cryptocurrency. Top 10 players receive prizes every hour!
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="game-slider">
						<div class="item">
							<div class="single-game">
								<img src="{{ asset('landingpage/page3/assets/images/game/icon1.png')}}" alt="">
								<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('landingpage/page3/assets/images/game/icon2.png')}}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('landingpage/page3/assets/images/game/icon3.png')}}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
						<div class="item">
							<div class="single-game">
									<img src="{{ asset('landingpage/page3/assets/images/game/icon2.png')}}" alt="">
									<a href="#" class="mybtn2">PLay NoW !</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Featured Game Area	End -->

	<!-- Latest Activities Area Start -->
	 <section class="activities">
		 <img class="shape shape1" src="{{ asset('landingpage/page3/assets/images/people/shape1.png')}}" alt="">
		 <img class="shape shape2" src="{{ asset('landingpage/page3/assets/images/people/shape2.png')}}" alt="">
		 <img class="shape shape3" src="{{ asset('landingpage/page3/assets/images/people/shape3.png')}}" alt="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h5 class="subtitle">
							The Smarter Way
						</h5>
						<h2 class="title">
							Lend and Borrow
						</h2>
						<p class="text">
							The World's First Crypto Lending Marketplace and
							Affordable and competitive interest rates
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-menu-area">
						<ul class="nav nav-lend mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-all-bets-tab" data-toggle="pill" href="#pills-all-bets" role="tab" aria-controls="pills-all-bets" aria-selected="true">All bets</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-my-bets-tab" data-toggle="pill" href="#pills-my-bets" role="tab" aria-controls="pills-my-bets" aria-selected="false">my bets</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-my-jackpots-tab" data-toggle="pill" href="#pills-my-jackpots" role="tab" aria-controls="pills-my-jackpots" aria-selected="false">jackpots</a>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-all-bets" role="tabpanel" aria-labelledby="pills-all-bets-tab">
							<div class="responsive-table">
								<table class="table">
								<thead>
									<tr>
									<th scope="col">USER</th>
									<th scope="col">BET ID</th>
									<th scope="col">BET AMOUNT</th>
									<th scope="col">CHANCE</th>
									<th scope="col">GAME</th>
									<th scope="col">PROFIT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p5.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p6.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
											0.00000051
										</td>
									</tr>
									<tr>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
											Tom Bass
										</td>
										<td>
											b799b8724b
										</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
											0.00000051
										</td>
										<td>70%</td>
										<td>Dice</td>
										<td>
											<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
											0.00000051
										</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-my-bets" role="tabpanel" aria-labelledby="pills-my-bets-tab">
							<div class="responsive-table">
									<table class="table">
											<thead>
												<tr>
												<th scope="col">USER</th>
												<th scope="col">BET ID</th>
												<th scope="col">BET AMOUNT</th>
												<th scope="col">CHANCE</th>
												<th scope="col">GAME</th>
												<th scope="col">PROFIT</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p5.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p6.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
												</tr>
											</tbody>
											</table>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-my-jackpots" role="tabpanel" aria-labelledby="pills-my-jackpots-tab">
							<div class="responsive-table">
									<table class="table">
											<thead>
												<tr>
												<th scope="col">USER</th>
												<th scope="col">BET ID</th>
												<th scope="col">BET AMOUNT</th>
												<th scope="col">CHANCE</th>
												<th scope="col">GAME</th>
												<th scope="col">PROFIT</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p5.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p6.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon1.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p1.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p2.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon3.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p3.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon4.png')}}" alt="">
														0.00000051
													</td>
												</tr>
												<tr>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/people/p4.png')}}" alt="">
														Tom Bass
													</td>
													<td>
														b799b8724b
													</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
													<td>70%</td>
													<td>Dice</td>
													<td>
														<img src="{{ asset('landingpage/page3/assets/images/icon5.png')}}" alt="">
														0.00000051
													</td>
												</tr>
											</tbody>
											</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fun fact Area Start -->
		<div class="funfact">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('landingpage/page3/assets/images/funfact/icon1.png')}}" alt="">
							<div class="count-area">
								<div class="count">93K</div>
							</div>
							<p>
									Players
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('landingpage/page3/assets/images/funfact/icon2.png')}}" alt="">
							<div class="count-area">
								<div class="count">99+</div>
							</div>
							<p>
									Games
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-fun">
							<img src="{{ asset('landingpage/page3/assets/images/funfact/icon3.png')}}" alt="">
							<div class="count-area">
								<div class="count">70+</div>
							</div>
							<p>
									Winners
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fun fact Area End -->
	</section>
	<!-- Latest Activities Area End -->


	<!-- Get Start Area Start -->
	 <section class="get-start">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 d-flex align-self-center">
					<div class="left-area">
						<div class="section-heading">
							<h5 class="subtitle">
								every day lots of  wins
							</h5>
							<h2 class="title ">
									be one of them
							</h2>
							<p class="text">
									Get started in less than 5 min - no credit card
									required.Gain early access to Dooplo and  experience crypto like never before.
							</p>
							<a href="#" class="mybtn1">Play  Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="right-image">
						<img src="{{ asset('landingpage/page3/assets/images/get-start.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Get Start Area End -->

	<!-- Recent Winners Area Start -->
	<section class="recent-winners">
			<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10">
							<div class="section-heading">
								<h5 class="subtitle">
									Try to Check out our
								</h5>
								<h2 class="title">
										Recent Winners
								</h2>
								<p class="text">
									We update our site regularly; more and more winners are added every day! To locate the most recent winner's information
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Leroy Roy
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Jeff Mack
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-winer">
								<div class="top-area">
									<div class="left">
										<h4 class="name">
												Neal Morris
										</h4>
										<p class="date">
												01.08.2019
										</p>
									</div>
									<div class="right">
										<p class="id">#5747e75482</p>
									</div>
								</div>
								<div class="bottom-area">
									<div class="left">
											0.099 ETH
									</div>
									<div class="right">
											<img src="{{ asset('landingpage/page3/assets/images/icon2.png')}}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-xl-center">
							<a class="mybtn2" href="#">View All </a>
						</div>
					</div>
			</div>
		</section>
	<!-- Recent Winners Area End -->

	<!-- Footer Area Start -->
	<footer class="footer" id="footer">
		<div class="subscribe-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="subscribe-box">
								<form action="#">
							<div class="row">
								<div class="col-lg-12">
									<div class="heading-area">
											<h5 class="sub-title">
													subscribe to Dooplo
											</h5>
											<h4 class="title">
													To Get Exclusive Benefits
											</h4>
									</div>
								</div>
								<div class="col-lg-3 col-4 d-flex align-self-center">
									<div class="icon">
										<img src="{{ asset('landingpage/page3/assets/images/mail-box.png')}}" alt="">
									</div>
								</div>
								<div class="col-lg-6 col-8 d-flex align-self-center">
									<div class="form-area">
											<input type="text" placeholder="Your Email Address">
									</div>
								</div>
								<div class="col-lg-3 d-flex align-self-center">
									<div class="button-area">
										<button class="mybtn1" type="submit">Subscribe
											<span><i class="fas fa-paper-plane"></i></span>
										</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							About
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	About Us
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Contact Us
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Latest Blog
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Authenticity Guarantee
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Customer Reviews
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>	Privacy Policy

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							My Account
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Manage Your Account
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> How to Deposit
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> How to Withdraw
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Account Varification
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Safety & Security
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i> Membership Level

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							help center
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Help centre
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>FAQ
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Quick Start Guide
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Tutorials
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Borrow
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Lend

								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="footer-widget info-link-widget">
						<h4 class="title">
							Legal Info
						</h4>
						<ul class="link-list">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Risk Warnings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Privacy Notice
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Security
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Terms of Service
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Become Affiliate
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>Complaints Policy

								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="left-area">
							<p>Copyright © 2019.All Rights Reserved By <a href="#">Dooplo</a>
							</p>
						</div>
					</div>
					<div class="col-lg-7">
						<ul class="copright-area-links">
							<li>
								<a href="#">Terms Of Use</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Gamble</a>
							</li>
							<li>
								<a href="#">Aware</a>
							</li>
							<li>
								<a href="#">Help Cente</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->

	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-right"></i>
	</div>
	<!-- Back to Top End -->

	<!-- Login Area Start -->
	<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="modal-body">
					<div class="logo-area">
							<img class="logo" src="{{ asset('landingpage/page3/assets/images/logo.png')}}" alt="">
					</div>
					<div class="header-area">
						<h4 class="title">Great to have you back!</h4>
						<p class="sub-title">Enter your details below.</p>
					</div>
					<div class="form-area">
						<form action="#"  method="POST">
							<div class="form-group">
									<label for="login-input-email">Email*</label>
									<input type="email" class="input-field" id="login-input-email"  placeholder="Enter your Email">
							</div>
							<div class="form-group">
									<label for="login-input-password">Password*</label>
									<input type="password" class="input-field" id="login-input-password"  placeholder="Password">
							</div>
							<div class="form-group">
								<div class="box">
									<div class="left">
											<input type="checkbox" class="check-box-field" id="input-save-password" checked>
										<label for="input-save-password">Remember Password</label>
									</div>
									<div class="right">
										<a href="#">
											Forgot Password?
										</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								   <button type="submit" class="mybtn1">Log In</button>
							</div>
						</form>
					</div>
					<div class="form-footer">
						<p>Not a member?
								<a href="#">Create account <i class="fas fa-angle-double-right"></i></a>
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- Login Area End -->

		<!-- SignIn Area Start -->
		<div class="modal fade login-modal sign-in" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered " role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<div class="logo-area">
								<img class="logo" src="{{ asset('landingpage/page3/assets/images/logo.png')}}" alt="">
						</div>
						<div class="header-area">
							<h4 class="title">Great to have you back!</h4>
							<p class="sub-title">Enter your details below.</p>
						</div>
						<div class="form-area">
							<form action="#" method="POST">
								<div class="form-group">
										<label for="input-name">Name*</label>
										<input type="text" class="input-field" id="input-name"  placeholder="Enter your Name">
								</div>
								<div class="form-group">
										<label for="input-email">Email*</label>
										<input type="email" class="input-field" id="input-email"  placeholder="Enter your Email">
								</div>
								<div class="form-group">
										<label for="input-password">Password*</label>
										<input type="password" class="input-field" id="input-password"  placeholder="Enter your password">
								</div>
								<div class="form-group">
										<label for="input-con-password">confirm password**</label>
										<input type="password" class="input-field" id="input-con-password"  placeholder="Enter your Confirm Password">
								</div>
								<div class="form-group">
										<select>
											<option value="0">BTC</option>
											<option value="1">USD</option>
											<option value="2">EUR</option>
										</select>
								</div>
								<div class="form-group">
									<div class="check-group">
											<input type="checkbox" class="check-box-field" id="input-terms" checked>
											<label for="input-terms">
													I agree with <a href="#">terms and Conditions</a> and  <a href="#">privacy policy</a>
											</label>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="mybtn1">Take Bonus</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
		<!-- SignIn Area End -->

	<!-- jquery -->
	<script src="{{ asset('landingpage/page3/assets/js/jquery.js')}}"></script>
	<!-- popper -->
	<script src="{{ asset('landingpage/page3/assets/js/popper.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('landingpage/page3/assets/js/bootstrap.min.js')}}"></script>
	<!-- plugin js-->
	<script src="{{ asset('landingpage/page3/assets/js/plugin.js')}}"></script>

	<!-- MpusemoverParallax JS-->
	<script src="{{ asset('landingpage/page3/assets/js/TweenMax.js')}}"></script>
	<script src="{{ asset('landingpage/page3/assets/js/mousemoveparallax.js')}}"></script>
	<!-- main -->
	<script src="{{ asset('landingpage/page3/assets/js/main.js')}}"></script>
</body>

</html>
