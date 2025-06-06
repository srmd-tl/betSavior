@extends('layouts.master')
@section('content')
<div class="container-fluid" >
			<!-- news -->
			<div class="row" style="margin-top: -5px;">
				<div class="col-12 pb-5">
					<!--SECTION START-->
						<section class="row">
							<!--Start slider news-->
							<div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
								<div id="featured" class="carousel slide carousel" data-ride="carousel">
									<!--dots navigate-->
									<ol class="carousel-indicators top-indicator">
										<li data-target="#featured" data-slide-to="0" class="active"></li>
										<li data-target="#featured" data-slide-to="1"></li>
										<li data-target="#featured" data-slide-to="2"></li>
										<li data-target="#featured" data-slide-to="3"></li>
									</ol>
                        
										<!--carousel inner-->
										<div class="carousel-inner">
											<!--Item slider-->
											<div class="carousel-item active">
												<div class="card border-0 rounded-0 text-light overflow zoom">
													<div class="position-relative">
														<!--thumbnail img-->
														<div class="ratio_left-cover-1 image-wrapper">
															<a href="#"><img class="img-fluid w-100" src="https://bootstrap.news/source/img1.jpg" alt="Bootstrap news template"></a>
														</div>
														<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
															<!--title-->
															<a href="#">
																<h2 class="h3 post-title text-white my-1">Bootstrap 4 template news portal magazine perfect for news site</h2>
															</a>
															<!-- meta title -->
															<div class="news-meta">
																<span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
																<span class="news-date">Oct 22, 2019</span>
															</div>
														</div>
													</div>
												</div>
											</div>
                            
										<!--Item slider-->
										<div class="carousel-item">
											<div class="card border-0 rounded-0 text-light overflow zoom">
												<div class="position-relative">
													<!--thumbnail img-->
													<div class="ratio_left-cover-1 image-wrapper">
														<a href="#">
															<img class="img-fluid w-100"
																src="https://bootstrap.news/source/img2.jpg"
																alt="Bootstrap news theme">
														</a>
													</div>
													<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
														<!--title-->
														<a href="#">
															<h2 class="h3 post-title text-white my-1">Walmart shares up 10% on online sales lift</h2>
														</a>
														<!-- meta title -->
														<div class="news-meta">
															<span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
															<span class="news-date">Oct 22, 2019</span>
														</div>
													</div>
												</div>
											</div>
										</div>
                            
										<!--Item slider-->
										<div class="carousel-item">
											<div class="card border-0 rounded-0 text-light overflow zoom">
												<div class="position-relative">
													<!--thumbnail img-->
													<div class="ratio_left-cover-1 image-wrapper">
														<a href="#">
															<img class="img-fluid w-100"
																src="https://bootstrap.news/source/img3.jpg"
																alt="Bootstrap blog template">
														</a>
													</div>
													<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
														<!--title-->
														<a href="#">
															<h2 class="h3 post-title text-white my-1">Bank chief warns on Brexit staff moves to other company</h2>
														</a>
														<!-- meta title -->
														<div class="news-meta">
															<span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
															<span class="news-date">Oct 22, 2019</span>
														</div>
													</div>
												</div>
											</div>
										</div>
                            
										<!--Item slider-->
										<div class="carousel-item">
											<div class="card border-0 rounded-0 text-light overflow zoom">
												<div class="position-relative">
													<!--thumbnail img-->
													<div class="ratio_left-cover-1 image-wrapper">
														<a href="#">
															<img class="img-fluid w-100"
																src="https://bootstrap.news/source/img4.jpg"
																alt="Bootstrap portal template">
														</a>
													</div>
														<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
														<!--title-->
														<a href="#">
															<h2 class="h3 post-title text-white my-1">The world's first floating farm making waves in Rotterdam</h2>
														</a>
														<!-- meta title -->
														<div class="news-meta">
															<span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
															<span class="news-date">Oct 22, 2019</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end item slider-->
									</div>
									<!--end carousel inner-->
								</div>
                    
								<!--navigation-->
								<a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#featured" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<!--End slider news-->
                
							<!--Start box news-->
							<div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
								<div class="row">
									<!--news box-->
									<div class="col-6 pb-1 pt-0 pr-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="#">
														<img class="img-fluid"
															src="https://bootstrap.news/source/img5.jpg"
															alt="simple blog template bootstrap">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<a class="p-1 badge badge-primary rounded-0" href="#">Lifestyle</a>

													<!--title-->
													<a href="#">
														<h2 class="h5 text-white my-1">Should you see the Fantastic Beasts sequel?</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pl-1 pt-0">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="#">
														<img class="img-fluid"
															src="https://bootstrap.news/source/img6.jpg"
															alt="bootstrap templates for blog">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<a class="p-1 badge badge-primary rounded-0" href="#">Motocross</a>
													<!--title-->
													<a href="#">
														<h2 class="h5 text-white my-1">Three myths about Florida elections recount</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pr-1 pt-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="#">
														<img class="img-fluid"
															src="https://bootstrap.news/source/img7.jpg"
															alt="bootstrap blog wordpress theme">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<a class="p-1 badge badge-primary rounded-0" href="#">Fitness</a>
													<!--title-->
													<a href="#">
														<h2 class="h5 text-white my-1">Finding Empowerment in Two Wheels and a Helmet</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
                        
									<!--news box-->
									<div class="col-6 pb-1 pl-1 pt-1">
										<div class="card border-0 rounded-0 text-white overflow zoom">
											<div class="position-relative">
												<!--thumbnail img-->
												<div class="ratio_right-cover-2 image-wrapper">
													<a href="#">
														<img class="img-fluid"
															src="https://bootstrap.news/source/img8.jpg"
															alt="blog website templates bootstrap">
													</a>
												</div>
												<div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
													<!-- category -->
													<a class="p-1 badge badge-primary rounded-0" href="#">Adventure</a>
													<!--title-->
													<a href="#">
														<h2 class="h5 text-white my-1">Ditch receipts and four other tips to be a shopper</h2>
													</a>
												</div>
											</div>
										</div>
									</div>
									<!--end news box-->
								</div>
							</div>
							<!--End box news-->
						</section>
						<!--END SECTION-->
					</div>
				</div>
			</div>
@endsection