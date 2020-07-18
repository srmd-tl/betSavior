<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('betSavior/css/bootstrap.min.css')}}" >
	<link rel="stylesheet" href="{{asset('betSavior/css/animate.css')}}">
	
	<link rel="stylesheet" href="{{asset('betSavior/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('betSavior/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('betSavior/css/fontawesome.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('betSavior/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('betSavior/css/icomoon.css')}}">
	
	<link rel="stylesheet" href="{{asset('betSavior/css/styles.css')}}" >
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
	<script src="{{asset('betSavior/js/javascript.js')}}" ></script>
	
    <title>Bet Savior | Home</title>
  </head>
  <body>
    <div >
		<!-- Topbar -->
		<div class="top">
			<div class="container">
		  		<div class="row">
					<button type="button" class="btn btn-white" >Games</button>
					<button type="button" class="btn btn-white">Futures</button>
					<button type="button" class="btn btn-white" >Leaders</button>
					<button type="button" class="btn btn-void" >NBA View All</button>
						<!-- scrolling content topbar -->
						<div  align="right" style="width:30%;float:right ;padding-top:5px;padding-right:10px;padding-left:10px;">
							<marquee  direction="left" >
								<table>
									<tr>
										<td><img src="img/team1.png"></td>
										<td><strong>CLE &nbsp;</strong></td>
										<td>19-46</td>
											
										<td>&nbsp;&nbsp;&nbsp;<img src="img/team2.png"></td>
										<td><strong>ATL &nbsp;</strong></td>
										<td>20-47</td>
											
										<td>&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">Thurs, 4:30am PT   FS-SE</span></td>
										<td>&nbsp;<button type="button" class="btn btn-void">Go to Game >></button></td>
											
										<td><img src="img/team1.png"></td>
										<td><strong>CLE &nbsp;</strong></td>
										<td>19-46</td>
										
										<td>&nbsp;&nbsp;&nbsp;<img src="img/team2.png"></td>
										<td><strong>ATL &nbsp;</strong></td>
										<td>20-47</td>
											
										<td>&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">Thurs, 4:30am PT   FS-SE</span></td>
										<td>&nbsp;<button type="button" class="btn btn-void">Go to Game >></button></td>
											
									</tr>
								</table>
							</marquee>
						</div>
						<div style="padding-top:5px;">
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control input-sm mr-sm-1" type="search" placeholder="Search" aria-label="Search" style="font-size: 0.8rem;">
								<button class="btn btn-sm btn-outline-primary my-2 my-sm-0 mr-sm-3" type="submit">Search</button>
								<button type="button" class="btn btn-primary">Join Bet Savior!</button>
							</form>
						</div>
				</div>
			</div>	
		</div>
		<!-- Navigation -->
		<div>
			<div class="header" id="myHeader">
				<div class="container py-0">
					<div class="row no-gutters d-flex align-items-center align-items-stretch">
						<div class="col-md-3 d-flex align-items-center">
							<a href="index.html"><img src="img/logo.png"></a>
								<select class="form-control" id="exampleFormControlSelect1" style="font-size: 0.7rem;width: 40%;">
									<option>All Sports</option>
									<option>NFL</option>
									<option>NBA</option>
									<option>MLB</option>
									<option>NHL</option>
								</select>
						</div>
						<div class="col-lg-9 d-block">
							<div class="row d-flex">
								<!-- games -->
								<div class="MultiCarousel" data-items="1,4,5,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
									<div class="MultiCarousel-inner">
										@forelse($matches as $key=> $match)
										<div class="item" style="width:170px !important;">
											<div class="pad15">
												<table>
													<tr>
														<td><img src="img/team1.png" align="left" style="width:30px;"></td>
														<td style="font-size:11px;"><strong>{{$match["teams"][0]}} &nbsp;</strong></td>
														<td style="font-size:11px;">19-46</td>
													</tr>
													<tr>	
														<td>&nbsp;&nbsp;&nbsp; <img src="img/team2.png" align="left" style="width:30px;"></td>
														<td style="font-size:11px;"><strong>{{$match["teams"][1]}}  &nbsp;</strong></td>
														<td style="font-size:11px;">20-47</td>
													</tr>
													<tr>		
														<td colspan="3">&nbsp;&nbsp;&nbsp;<span style="font-size:10px;">{{

															\Carbon\Carbon::parse(\Carbon\Carbon::createFromTimestamp($match["commence_time"])->toDateTimeString(), 'UTC')->isoFormat('MMMM Do YYYY, h:mm:ss a')

															}}</span></td>
													</tr>
													<tr>		
														<td colspan="3">&nbsp;<a href="{{route('game.show',[$key,'sport'=>$match['sport_key'] ])}}" class="btn btn-void" style="color:#004bd1;font-size:11px;">Go to Game >></a></td>
													</tr>
												</table>
											</div>
										</div>
										@empty
										@endforelse
									
									</div>
									<button class="btn btn-primary leftLst"><</button>
									<button class="btn btn-primary rightLst">></button>
								</div>		
					<!-- end games -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-dark  nav-light" id="ftco-navbar">
				<div class="container d-flex align-items-center">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="oi oi-menu"></span> Menu</button>
						<div class="collapse navbar-collapse" id="ftco-nav">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
								<li class="nav-item"><a href="about.html" class="nav-link">NFL</a></li>
								<li class="nav-item"><a href="team.html" class="nav-link">NBA</a></li>
								<li class="nav-item"><a href="project.html" class="nav-link">MLB</a></li>
								<li class="nav-item"><a href="services.html" class="nav-link">NHL</a></li>
								<li class="nav-item"><a href="more.html" class="nav-link">MORE</a></li>
								<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
								<li class="nav-item">	<a href="#" class="nav-link">Current Performance &#9662;</a>
									<ul class="dropdown">
										<li><a href="#">Grafenwoehr</a></li>
										<li><a href="#">Hohenfels</a></li>
										<li><a href="#">Katterbach</a></li>
										<li><a href="#">Stuttgart</a></li>
										<li><a href="#">Vilseck</a></li>
									</ul>
								</li>
								<li class="nav-item" style="color:#f8f8f8;padding-top:15px;font-weight:200;padding-left:20px;padding-right:20px;">|</li>
								<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
							</ul>
						</div>
				</div>
			</nav>
			<!-- End Navigation -->	 	 
		</div>
		<!-- Containter Fluid -->
					@yield('content')
					
					<!-- end news -->
			<!-- Featured Boxes --> 
			<div class="container" style="margin-top:50px;background-color:#f8f8f8;padding:20px;">
				<div class="row" >
					<div class="col-lg-4 d-block col-sm-4 text-center" >
						<img src="img/featured1.jpg" class="img-thumbnail" > 
							<h3>$500
								<small>Risk Free Bet</small>
							</h3>
						<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
						<button type="button" class="btn btn-primary">Claim Now</button>
					</div>
					<div class="col-lg-4 d-block col-sm-4 text-center">
						<img src="img/featured1.jpg" class="img-thumbnail" > 
							<h3>$500
								<small>Risk Free Bet</small>
							</h3>
							<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
							<button type="button" class="btn btn-primary">Claim Now</button>
					</div>
					<div class="col-lg-4 d-block col-sm-4 text-center">
						<img src="img/featured1.jpg" class="img-thumbnail" > 
							<h3>$500
								<small>Risk Free Bet</small>
							</h3>
							<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
							<button type="button" class="btn btn-primary">Claim Now</button>
					</div>
				</div>
			</div>

			<!-- Most popular bets -->
			<div class="container" style="margin-top:70px;">
				<div class="row">
					<div class="col-md-10">
						<h1>MOST POPULAR <span style="color:#004ad6">BETS</span></h1>
							<div class="col-md-12 py-md-10 pl-md-12 fadeInUp">
								<div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
										<li class="nav-item">
											<a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> ALL</a>
										</li>
										<li class="nav-item px-lg-2">
											<a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Soccer</a>
										</li>
										<li class="nav-item">
											<a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> TAB 3</a>
										</li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
										<div class="tab-pane container p-0 active" id="home1">
											<div class="table-responsive">
												<table class="table align-items-center table-flush">
													<tbody>
														<tr>
															<th scope="row">
																<div class="media align-items-center">
																	<a href="#" class="avatar rounded-circle mr-3">
																		<img alt="Image placeholder" width="100" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/bootstrap.jpg">
																	</a>
						
																		<div class="media-body">
																				<p>Bundesliga<br/><span class="mb-0 text-sm myspan">Borussia Dortmund</span><br/><span class="myspan-sm">1. FSV Mainz 05 @ Borussia Dortmund</span><br/><span class="myspan-sm">today</span></p>
																		</div>
																</div>
															</th>
															<td>
																<span style="padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">WINNER</span><BR/>
																	<div style="padding:20px;background:#dadada;border-radius: 20px 20px 0px 0px;">
																		<span class="mb-0 text-sm myspan"style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">-357</span>
																	</div>
																	<div style="padding:10px;background:#ffba00; height:40px;">
																		<a href="#"><img src="img/web-logo.png" style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center"></a>
																	</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<button type="button" class="btn btn-primary" style="margin-top: 5em;">COMPARE ODDS <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<th scope="row">
																<div class="media align-items-center">
																	<a href="#" class="avatar rounded-circle mr-3">
																		<img alt="Image placeholder" width="100" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/angular.jpg">
																	</a>
																	<div class="media-body">
																		<p>Bundesliga<br/><span class="mb-0 text-sm myspan">Borussia Dortmund</span><br/><span class="myspan-sm">1. FSV Mainz 05 @ Borussia Dortmund</span><br/><span class="myspan-sm">today</span></p>
																	</div>
																</div>
															</th>
															<td>
																<span style="padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">WINNER</span><BR/>
																	<div style="padding:20px;background:#dadada;border-radius: 20px 20px 0px 0px;">
																		<span class="mb-0 text-sm myspan"style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">-357</span>
																	</div>
																	<div style="padding:10px;background:#ffba00; height:40px;">
																		<a href="#"><img src="img/web-logo.png" style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center"></a>
																	</div>
															</td>
															<td>
																<div class="d-flex align-items-center">
																	<button type="button" class="btn btn-primary" style="margin-top: 5em;">COMPARE ODDS <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
																</div>
															</td>
														</tr>
															<tr>
																<th scope="row">
																	<div class="media align-items-center">
																		<a href="#" class="avatar rounded-circle mr-3">
																			<img alt="Image placeholder" width="100" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/sketch.jpg">
																		</a>
																			<div class="media-body">
																				<p>Bundesliga<br/><span class="mb-0 text-sm myspan">Borussia Dortmund</span><br/><span class="myspan-sm">1. FSV Mainz 05 @ Borussia Dortmund</span><br/><span class="myspan-sm">today</span></p>
																			</div>
																	</div>
																</th>
																<td>
																	<span style="padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">WINNER</span><BR/>
																		<div style="padding:20px;background:#dadada;border-radius: 20px 20px 0px 0px;">
																			<span class="mb-0 text-sm myspan"style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">-357</span>
																		</div>
																		<div style="padding:10px;background:#ffba00; height:40px;">
																			<a href="#"><img src="img/web-logo.png" style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center"></a>
																		</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<button type="button" class="btn btn-primary" style="margin-top: 5em;">COMPARE ODDS <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
																	</div>
																</td>
															</tr>
															<tr>
																<th scope="row">
																	<div class="media align-items-center">
																		<a href="#" class="avatar rounded-circle mr-3">
																			<img alt="Image placeholder" width="100" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/react.jpg">
																		</a>
																		<div class="media-body">
																			<p>Bundesliga<br/><span class="mb-0 text-sm myspan">Borussia Dortmund</span><br/><span class="myspan-sm">1. FSV Mainz 05 @ Borussia Dortmund</span><br/><span class="myspan-sm">today</span></p>
																		</div>
																	</div>
																</th>
																<td>
																	<span style="padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">WINNER</span><BR/>
																		<div style="padding:20px;background:#dadada;border-radius: 20px 20px 0px 0px;">
																			<span class="mb-0 text-sm myspan"style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">-357</span>
																		</div>
																		<div style="padding:10px;background:#ffba00; height:40px;">
																			<a href="#"><img src="img/web-logo.png" style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center"></a>
																		</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<button type="button" class="btn btn-primary" style="margin-top: 5em;">COMPARE ODDS <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
																	</div>
																</td>
															</tr>
															<tr>
																<th scope="row">
																	<div class="media align-items-center">
																		<a href="#" class="avatar rounded-circle mr-3">
																			<img alt="Image placeholder" width="100" src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/vue.jpg">
																		</a>
																		<div class="media-body">
																			<p>Bundesliga<br/><span class="mb-0 text-sm myspan">Borussia Dortmund</span><br/><span class="myspan-sm">1. FSV Mainz 05 @ Borussia Dortmund</span><br/><span class="myspan-sm">today</span></p>
																		</div>
																	</div>
																</th>
																<td>
																	<span style="padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">WINNER</span><BR/>
																		<div style="padding:20px;background:#dadada;border-radius: 20px 20px 0px 0px;">
																			<span class="mb-0 text-sm myspan"style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center">-357</span>
																		</div>
																		<div style="padding:10px;background:#ffba00; height:40px;">
																			<a href="#"><img src="img/web-logo.png" style="font-weight:bold;padding-top:-10px;display:block;margin-left:auto;margin-right:auto;text-align:center"></a>
																		</div>
																</td>
																<td>
																	<div class="d-flex align-items-center">
																		<button type="button" class="btn btn-primary" style="margin-top: 5em;">COMPARE ODDS <i style="color: #ffba00;" class="fas fa-angle-double-right"></i></button>
																	</div>
																</td>
															</tr>
													</tbody>
												</table>
												<div class="col text-center">
													<!-- pagination -->
													<nav aria-label="Page navigation example">
														<ul class="pagination">
															<li class="page-item"><a class="page-link" href="#">Previous</a></li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item"><a class="page-link" href="#">3</a></li>
															<li class="page-item"><a class="page-link" href="#">Next</a></li>
														</ul>
													</nav>
													<!-- end pagination -->
												</div>
											</div>
										</div>
										<div class="tab-pane container p-0 fade" id="home2">
											b
										</div>
										<div class="tab-pane container p-0 fade" id="home3">
											d
										</div>
									</div>
								</div>
							</div>
					</div>
					<div class="col-md-2">
						<img src="img/ad.jpg">
					</div>
					
					<!-- Join Us -->
					<h2 style="font-size:60px; width:60%; text-align:center;margin-left:auto;margin-right:auto;margin-top:70px;color:#ffba00;">JOIN<span style="color:#004ad6; " >US</span></h1>
					
					<!-- end Join Us -->
				</div>
			</div>
					<div class="container-fluid" style="background-color:#004ad6;">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h2 style="font-size:60px; width:60%; text-align:center;margin-left:auto;margin-right:auto;margin-top:50px;color:#ffba00;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
								</div>
								<div class="col-md-12">
									<img src="img/joinus.png" style="margin-left:auto;margin-right:auto;display:block;">
									
								</div>
								<div class="col-md-12">
									<h3 style="font-size:36px; font-weight:400; width:60%; text-align:center;margin-left:auto;margin-right:auto;margin-top:40px;color:#ffffff;">Trusted by everyone, big and small</h3>
									<h4 style="font-size:18px; font-weight:400; width:60%; text-align:center;margin-left:auto;margin-right:auto;margin-top:20px;color:#ffffff;">We're trusted by the biggest names in the sports world and by over 800,000 registered users around the world.</h4>
									
									<div class="row justify-content-center">
										<button type="button" class="btn btn-primary" style="margin-top:30px;">GET STARTED</button>
									</div>
								</div>
							</div>
						</div>
					</div>

<!-- End Most popular bets -->

<!-- footer -->
					<a href="index.html" style="margin-top:50px; display:block;"><img src="img/logo.png" style="margin-left:auto;margin-right:auto;display:block;"></a>
					<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background:#9c9c9c !important;">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Advertise With Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Privacy Policy </a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Terms of Service</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>

				<div class="container">
					<div class="row">
						<div class="col-md-6" >
							<span style="font-size:12px;">© 2009-2020 Bet Savior | All rights reserved.</span>
						</div>
						<div class="col-md-6">
							<div class="social-part">
								<span style="font-size:14px; float:right;">Follow Us: 
									<a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
									<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
									<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- end footer -->

<script>
		// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
	
  } else {
    header.classList.remove("sticky");
  }
}
	</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    @stack('js')
  </body>
</html>